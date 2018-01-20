<?phpclass ErrorLog{    /**     * @var     */    protected static $_instance;    /**     * @var     */    private $LOG_FILE_PATH;    /**     * @var array     */    private $dom;    /**     * ErrorLog constructor.     */    private function __construct()    {        $this->dom = new DomDocument('1.0', 'utf-8');        $this->dom->formatOutput = true;        $this->dom->preserveWhiteSpace = false;    }    /**     * @return ErrorLog     */    public static function getInstance()    {        if (self::$_instance === null) {            self::$_instance = new self;        }        return self::$_instance;    }    /**     * @param $file_path     */    public function setLogFile($file_path)    {        $this->LOG_FILE_PATH = $file_path;    }    /**     * @param $errno     * @param string $errmsg     * @param string $file     * @param string $line     * @throws ErrorException     */    public function addIntoLog($errno, $errmsg = 'message', $file = 'file', $line = 'line')    {        $timestamp = date('m.d.y/H-i');        if (!$this->dom->load($this->LOG_FILE_PATH)) {            throw new ErrorException('LOG FILE IS NOT EXIST');        } else {            $parent = $this->dom->getElementsByTagName('Logs');            $log = $this->dom->createElement('Log', $errmsg);            $log->setAttribute('Time', $timestamp);            $log->setAttribute('File', $file);            $log->setAttribute('Line', $line);            $parent->item(0)->appendChild($log);            $this->dom->saveXML();            $this->dom->save($this->LOG_FILE_PATH);        }    }}
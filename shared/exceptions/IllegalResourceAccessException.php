<?php

class IllegalResourceAccessException extends Exception implements IException {

    protected $message = 'Cannot access this resource at this time.';
    private   $string;
    protected $code = 4;
    protected $file;
    protected $line;
    private   $trace;


    public function __construct($message = null, $code = 4) {
        if ($message !== null) {
            $this->message = $message;
            $this->code = $code;
        }
        parent::__construct($this->message, $this->code);
    }


    public function __toString() {
        return get_class($this) . " '" . $this->message . "' in " . $this->file . "(" . $this->line . ")\n" . $this->getTraceAsString();
    }


}



?>
<?php

abstract class AbstractDeleteChain
{
    protected $next;

    public function setNext(AbstractDeleteChain $next)
    {
        $this->next = $next;
        return $next;
    }

    public function deleteMessages($message)
    {
        $processedMessage = $this->delete($message);
        echo "После " . get_class($this) . ": " . $processedMessage . "\n";
        if($this->next !== null){
            $processedMessage = $this->next->deleteMessages($processedMessage);
        }
        return $processedMessage;
    }

    abstract protected function delete($message):?string;
}
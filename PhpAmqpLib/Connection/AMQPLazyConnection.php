<?php
namespace PhpAmqpLib\Connection;

class AMQPLazyConnection extends AMQPStreamConnection
{
    /**
     * Gets socket from current connection
     *
     * @deprecated
     * @throws \Exception
     */
    public function getSocket()
    {
        $this->connect();

        return parent::getSocket();
    }

    /**
     * {@inheritdoc}
     */
    public function channel($channel_id = null)
    {
        $this->connect();

        return parent::channel($channel_id);
    }

    /**
     * @return null|\PhpAmqpLib\Wire\IO\AbstractIO
     * @throws \Exception
     */
    protected function getIO()
    {
        if (!$this->io) {
            $this->connect();
        }

        return $this->io;
    }

    /**
     * Should the connection be attempted during construction?
     *
     * @return bool
     */
    public function connectOnConstruct()
    {
        return false;
    }
}

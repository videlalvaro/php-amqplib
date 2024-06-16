<?php

/* This file was autogenerated by spec/parser.php - Do not modify */

namespace PhpAmqpLib\Helper\Protocol;

class Wait091
{
    /**
     * @var array
     */
    protected $wait = array(
        'connection.start' => '10,10',
        'connection.start_ok' => '10,11',
        'connection.secure' => '10,20',
        'connection.secure_ok' => '10,21',
        'connection.tune' => '10,30',
        'connection.tune_ok' => '10,31',
        'connection.open' => '10,40',
        'connection.open_ok' => '10,41',
        'connection.close' => '10,50',
        'connection.close_ok' => '10,51',
        'connection.blocked' => '10,60',
        'connection.unblocked' => '10,61',
        'connection.update_secret' => '10,70',
        'connection.update_secret_ok' => '10,71',
        'channel.open' => '20,10',
        'channel.open_ok' => '20,11',
        'channel.flow' => '20,20',
        'channel.flow_ok' => '20,21',
        'channel.close' => '20,40',
        'channel.close_ok' => '20,41',
        'access.request' => '30,10',
        'access.request_ok' => '30,11',
        'exchange.declare' => '40,10',
        'exchange.declare_ok' => '40,11',
        'exchange.delete' => '40,20',
        'exchange.delete_ok' => '40,21',
        'exchange.bind' => '40,30',
        'exchange.bind_ok' => '40,31',
        'exchange.unbind' => '40,40',
        'exchange.unbind_ok' => '40,51',
        'queue.declare' => '50,10',
        'queue.declare_ok' => '50,11',
        'queue.bind' => '50,20',
        'queue.bind_ok' => '50,21',
        'queue.purge' => '50,30',
        'queue.purge_ok' => '50,31',
        'queue.delete' => '50,40',
        'queue.delete_ok' => '50,41',
        'queue.unbind' => '50,50',
        'queue.unbind_ok' => '50,51',
        'basic.qos' => '60,10',
        'basic.qos_ok' => '60,11',
        'basic.consume' => '60,20',
        'basic.consume_ok' => '60,21',
        'basic.cancel' => '60,30',
        'basic.cancel_ok' => '60,31',
        'basic.publish' => '60,40',
        'basic.return' => '60,50',
        'basic.deliver' => '60,60',
        'basic.get' => '60,70',
        'basic.get_ok' => '60,71',
        'basic.get_empty' => '60,72',
        'basic.ack' => '60,80',
        'basic.reject' => '60,90',
        'basic.recover_async' => '60,100',
        'basic.recover' => '60,110',
        'basic.recover_ok' => '60,111',
        'basic.nack' => '60,120',
        'tx.select' => '90,10',
        'tx.select_ok' => '90,11',
        'tx.commit' => '90,20',
        'tx.commit_ok' => '90,21',
        'tx.rollback' => '90,30',
        'tx.rollback_ok' => '90,31',
        'confirm.select' => '85,10',
        'confirm.select_ok' => '85,11',
    );

    /**
     * @var string $method
     * @return string
     */
    public function get_wait($method)
    {
        return $this->wait[$method];
    }
}

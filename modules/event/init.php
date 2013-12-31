<?php

function do_event($name, & $data)
{
    Event::run($name, $data);

}

function add_event($name, $callback)
{
    Event::add($name, $callback);

}

function clear_event($name, $callback = false)
{
    Event::clear($name, $callback);

}
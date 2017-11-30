<?php

namespace Dormilich\Http;

/**
 * Represents an IP range with access to some basic properties.
 */
interface RangeInterface
{
    /**
     * Returns the textual representation of the IP range.
     * 
     * @return string
     */
    public function __toString();

    /**
     * Returns the number of IPs in the range.
     * 
     * @return string
     */
    public function count();

    /**
     * Get the start IP of the range.
     * 
     * @return IpInterface
     */
    public function getFirstIP();

    /**
     * Get the end IP of the range.
     * 
     * @return IpInterface
     */
    public function getLastIP();

    /**
     * Get a list of networks that cover the IP range.
     * 
     * @return NetworkInterface[]
     */
    public function getNetworks();
}

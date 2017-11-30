<?php

namespace Dormilich\Http;

/**
 * Represents an network with access to some basic properties.
 */
interface NetworkInterface
{
    /**
     * Returns a textual representation of the network.
     * 
     * @return string
     */
    public function __toString();

    /**
     * Returns the number of IPs in the network.
     * 
     * @return string
     */
    public function count();

    /**
     * Returns the network address of the network.
     * 
     * @return IpInterface
     */
    public function getNetwork();

    /**
     * Returns the broadcast address of the network.
     * 
     * @return IpInterface
     */
    public function getBroadcast();

    /**
     * Returns the CIDR of the network.
     * 
     * @return string
     */
    public function getCIDR();

    /**
     * Returns the prefix length of the network.
     * 
     * @return integer
     */
    public function getPrefixLength();

    /**
     * Returns the netmask of the network.
     * 
     * @return IpInterface
     */
    public function getNetmask();

    /**
     * Returns a list of usable (host) IPs.
     * 
     * @return RangeInterface
     */
    public function getHosts();
}

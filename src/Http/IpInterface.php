<?php

namespace Dormilich\Http;

/**
 * Represents an IP address and allows output in several formats.
 */
interface IpInterface
{
    const IP_V4 = 4;

    const IP_V6 = 6;

    /**
     * Returns the textual representation of the IP address.
     * 
     * @return string
     */
    public function __toString();

    /**
     * Get the version number of the IP address.
     * 
     * @return integer
     */
    public function getVersion();

    /**
     * The (binary) packed in_addr representation of the IP address.
     * 
     * @return string
     */
    public function inAddr();

    /**
     * The string representation in binary format.
     * 
     * @return string
     */
    public function toBin();

    /**
     * The string representation in decimal format.
     * 
     * @return string
     */
    public function toDec();

    /**
     * The string representation in hexadecimal format.
     * 
     * @return string
     */
    public function toHex();
}

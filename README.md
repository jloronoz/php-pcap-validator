# php-pcap-validator
This is a simple PHP script to validate PCAP files using Magic Number

PHP Class based in C pcap_hdr_s

class pcap_hdr_t {
     public $magic_number; /* magic number */
     public $version_major; /* major version number */
     public $version_minor; /* minor version number */
     public $thiszone;  /* GMT to local correction */
     public $sigfigs; /* accuracy of timestamps */
     public $snaplen; /* max length of captured packets, in octets */
     public $network;  /* data link type */
}

If you want to test, change the name of the "responses.pcap" file into index.php

$fh = fopen( 'responses.pcap', 'rb');

Example of valid header pcap file: 

Magic number: 0xd4c3b2a1, Version: 2.4, Snaplen: 2048

Thanks for sharing.


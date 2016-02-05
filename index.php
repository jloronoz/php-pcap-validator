<?php
/*
     Bestworldsweb - PCAP READER VALIDATOR
*/
class pcap_hdr_t {
     public $magic_number; /* magic number */
     public $version_major; /* major version number */
     public $version_minor; /* minor version number */
     public $thiszone;  /* GMT to local correction */
     public $sigfigs; /* accuracy of timestamps */
     public $snaplen; /* max length of captured packets, in octets */
     public $network;  /* data link type */
}

/* Change responses.pcap by the name of the pcap file you want to try  */

$fh = fopen( 'responses.pcap', 'rb');

if( ! $fh ) {
     throw new Exception( "Can't opend the PCAP file" );
}

$buffer = unpack( "Nmagic_number/vversion_major/vversion_minor/lthiszone/Vsigfigs/Vsnaplen/Vnetwork", fread( $fh, 24 ) );

printf( "Magic number: 0x%s, Version: %d.%d, Snaplen: %d\n",
          dechex( $buffer['magic_number']),
          $buffer['version_major'],
          $buffer['version_minor'],
          $buffer['snaplen'] );


/*
     EXAMPLE RIGHT RESPONSE : Magic number: 0xd4c3b2a1, Version: 2.4, Snaplen: 2048
*/

fclose( $fh );
---
layout: default
title: LibraryBox | v2.1 Hardware
---
    <div id="header">
	  <div class="container">
	    <div class="row">
		  <div class="span12">
		    <h1>LibraryBox v2.1 Hardware</h1>
		  </div>
		</div>
	  </div>
	</div>

<div id="content">
	  <div class="container">
	    <div class="row">
		  <div class="span12">

        <p>To build a LibraryBox, you need a <strong>router</strong> and a <strong>USB thumb drive</strong>. You can build a LibraryBox v2.1 with a variety of different router hardware, depending on your use-case and need. At the moment, Librarybox v2.1 supports 12 different pieces of hardware. These are the suggested ones, a complete list can be found see below in the Download section.
        <ul>
          <li style="font-size: 1.5em; line-height: 1.5em;"><a href="http://www.amazon.com/TP-LINK-TL-MR3040-Wireless-Portable-Compatible/dp/B0088PPFP4/?tag=jasongriffey-20">TP-Link MR3040</a></li>
        The MR3040 is the new "standard" LibraryBox hardware, easily pocketable and with a built-in battery for mobile use..
          <li style="font-size: 1.5em; line-height: 1.5em;"><a href="http://www.amazon.com/TP-LINK-Portable-802-11n-Wireless-TL-MR3020/dp/B006DEBXD0/?tag=jasongriffey-20">TP-Link MR3020</a></li>
        The MR3020 is our other standard testing platform, very cheap in the US and easy to work with.

<li style="font-size: 1.5em; line-height: 1.5em;"><a href="http://www.amazon.com/Gl-iNet-Router-Openwrt-Mobile-Control/dp/B00JKFE0FW/?tag=jasongriffey-20">Gl-iNet Router</a></li>
The least expensive hardware we've ever been able to support, available widely for less than $25. Amazing product for the price, and works beautifully as a LibraryBox.
        <li style="font-size: 1.5em; line-height: 1.5em;"><a href="http://www.amazon.com/TP-LINK-TL-WR703N-Portable-802-11n-Wireless/dp/B0083Z54P0/?tag=jasongriffey-20">TP-Link WR703n</a></li>
        The WR703n is the non-US version of the MR3020, available in Japan, China, and elsewhere in the world. DO NOT confuse this with the 702n, which does not have a USB port and isn't suitable for use with LibraryBox.
        <li style="font-size: 1.5em; line-height: 1.5em;"><a href="http://www.amazon.com/TP-LINK-TL-WR842ND-Multi-function-Wireless-detachable/dp/B006E04T9I/?tag=jasongriffey-20">TP-Link WR842n</a></li>
        The WR842n is best for non-portable LibraryBox installations, or where you want the power of external antenna to broadcast your signal. Make sure that you download the correct version of the firmware for your hardware.
        <!--<li style="font-size: 1.5em; line-height: 1.5em;"> <a href="http://www.amazon.com/TP-LINK-TL-WR1043ND-Ultimate-Wireless-Detachable/dp/B002YLAUU8/ref=sr_1_1?ie=UTF8&qid=1392697043&sr=8-1&keywords=1043nd">TP-Link WR-1043ND VERSION 1</a></li>
        The 1043ND is another non-portable LibraryBox installation option, and has the highest cost of any of the stand-alone routers that LibraryBox supports. But with 3 external antennae, if you're looking for power, the 1043 is your huckleberry. This firmware supports version 1 of this router, NOT the currently available v2. -->
        <li style="font-size: 1.5em; line-height: 1.5em;"><a href="http://www.amazon.com/TP-Link-Portable-Router-TL-MR10U-Mobile/dp/B00GM7Q1TY/?tag=jasongriffey-20">TP-Link TL-MR10U</a></li>
        The MR10U is a portable router with a built-in 2600 mAh battery for charging other devices built in. It is primarily a non-US piece of hardware, so if you are in the US, tread carefully.
        <li style="font-size: 1.5em; line-height: 1.5em;"> <a href="http://www.aliexpress.com/item/TP-Link-TL-MR13U-Portable-10400mAh-Battery-Powered-Wireless-N150-Home-Travel-Beach-Hotel-WIFI-3G/1542716177.html?af=ppc&isdl=y&src=Google&albch=Google&albcp=Search_Search-ALL-PLA&albkw=None_US-Shopping-Search-Product-AliExpress_none_none&albag=home_none_Search-ALL-PLA_1013999999870&albmt=broad&albst=search-text&albom=OTHERS_None_20130807_Aliexpress&creative=31447451305&ptsid=1013999999870&gclid=COa558_l1LwCFQNufgodvSYAfg">TP-Link MR13U</a></li>
        The MR13U is also a portable router for the non-US market, but this one has a 10,000 mAh battery, plenty for running the LibraryBox for over a full day of use.

        </ul>
        </p>
        <p>LibraryBox also requires a FAT32 formatted USB flash drive to be used in conjunction with one of the above routers. You can use any FAT32 formatted USB flash drive, which means that there is a soft limit of 4GB for a single file (a limitation of the FAT32 filesystem). I like the SanDisk Cruzer line of drives, that come in a variety of sizes and costs from Amazon: <a href="http://www.amazon.com/SanDisk-Cruzer-Flash-Drive-SDCZ33-016G-B35/dp/B005FYNSZA/?tag=jasongriffey-20">from 4GB to 128GB</a>. I like the low-profile drives as they make for a more compact final product.</p>
        <p>Full disclosure: the links to hardware above use my Amazon Affiliate code, if you are going to buy hardware to build your own LibraryBox and you click through those links a very small amount will go towards the further development of the project</p>

<h3>Full List of Supported Hardware</h3>

        <p>
          <ul>
          <li><a href="http://librarybox.us/v2.1/openwrt-ar71xx-generic-tl-mr3020-v1-squashfs-factory.bin">MR3020 - Version 1 firmware</a></li>MD5 Hash: 00FDE382B00DF090716949062B6BD709
          <li><a href="http://librarybox.us/v2.1/openwrt-ar71xx-generic-tl-mr3040-v1-squashfs-factory.bin">MR3040 - Version 1 firmware</a></li>MD5 Hash: 6537D860B7160C87012204B4BFF84808
          <li><a href="http://librarybox.us/v2.1/openwrt-ar71xx-generic-tl-mr3040-v2-squashfs-factory.bin">MR3040 - Version 2 firmware</a></li>MD5 Hash: 45933D958ADC0F8326447811E728F01A
          <li><a href="http://librarybox.us/v2.1/openwrt-ar71xx-generic-tl-wr703n-v1-squashfs-factory.bin">WR703N - Version 1 firmware</a></li>MD5 Hash: 8C0E374B965E2CCF49BB04356C77EE4F
          <li><a href="http://librarybox.us/v2.1/openwrt-ar71xx-generic-tl-wr842n-v1-squashfs-factory.bin">WR842N - Version 1 firmware</a></li>MD5 Hash: 4D11C1721A7E8204D72DBC69D9BC1592
          <li><a href="http://librarybox.us/v2.1/openwrt-ar71xx-generic-tl-wr842n-v2-squashfs-factory.bin">WR842N - Version 2 firmware</a></li>MD5 Hash: 36BCB67CF407CD22689DABBF81932837
          <li><a href="http://librarybox.us/v2.1/openwrt-ar71xx-generic-tl-wr1043nd-v1-squashfs-factory.bin">WR1043ND - Version 1 firmware</a></li>MD5 Hash: DF5B21E00F5CB6B1E87F4E373626AA6C
          <li><a href="http://librarybox.us/v2.1/openwrt-ar71xx-generic-tl-wr1043nd-v2-squashfs-factory.bin">WR1043ND - Version 2 firmware</a></li>MD5 Hash: 05DD6493AA46417CD46E22B02A99BB72
          <li><a href="http://librarybox.us/v2.1/openwrt-ar71xx-generic-tl-mr10u-v1-squashfs-factory.bin">MR10U - Version 1 firmware</a></li>MD5 Hash: 64DC6DC18524962FB19A798F34A9FFCC
          <li><a href="http://librarybox.us/v2.1/openwrt-ar71xx-generic-tl-mr11u-v1-squashfs-factory.bin">MR11U - Version 1 firmware</a></li>MD5 Hash: 8DD6DE57B314D47FD10F7E219FE2469E
          <li><a href="http://librarybox.us/v2.1/openwrt-ar71xx-generic-tl-mr11u-v2-squashfs-factory.bin">MR11U - Version 2 firmware</a></li>MD5 Hash: 559BDB5BC73A684A816208BE0693E268
          <li><a href="http://librarybox.us/v2.1/openwrt-ar71xx-generic-tl-mr13u-v1-squashfs-factory.bin">MR13U - Version 1 firmware</a></li>MD5 Hash: 2C376E0D09A4317BA338C2AB5634FFF4
          <li><a href="http://librarybox.us/v2.1/openwrt-ar71xx-generic-gl-inet-v1-squashfs-factory.bin">GL-iNet - Version 1 firmware</a></li>MD5 Hash: 37D2E797ECA9E98C85343C57EB2A65B4
          <li><a href="http://librarybox.us/v2.1/openwrt-ar71xx-generic-tl-mr3420-v1-squashfs-factory.bin">MR3420 - Version 1 firmware</a></li>MD5 Hash: CD01B8E845634C2C8D3B045624196D98
          <li><a href="http://librarybox.us/v2.1/openwrt-ar71xx-generic-tl-mr3420-v2-squashfs-factory.bin">MR3420 - Version 2 firmware</a></li>MD5 Hash: 9E14C9EDB5B763EB4EA67107EB6FA02E
          <li><a href="http://librarybox.us/v2.1/openwrt-ar71xx-generic-tl-wdr4300-v1-squashfs-factory.bin">WDR4300 - Version 1 firmware</a></li>MD5 Hash: 38CBAA2D397E98E18A3C7CD27B3B4758
          <li><a href="http://librarybox.us/v2.1/openwrt-ar71xx-generic-tl-wr2543-v1-squashfs-factory.bin">WR2543 - Version 1 firmware</a></li>MD5 Hash: FF98517B366B98B67B77EB8EED291A71

          </ul></p>




</div>
</div>
</div>
</div>

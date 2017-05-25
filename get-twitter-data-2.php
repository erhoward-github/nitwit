<?php
header('Content-Type: application/javascript');
/*
http://localhost/dev/nitwit/get-twitter-data-2.php
*/
$keywords = array_key_exists('keywords', $_GET) ? $_GET['keywords'] : '';
$callback = array_key_exists('callback', $_GET) ? $_GET['callback'] : '';
# angular.callbacks._0
# angular.callbacks._1
# angular.callbacks._2
$top = array_key_exists('top', $_GET) ? $_GET['top'] : '';
$json = <<< "__DOC__"
$callback(
{
    "hashtags": {
        "Windsor": 12,
        "WWPNvsPRIN": 10,
        "njsoccer": 5,
        "jobs": 5,
        "education": 4,
        "BreakingNews": 4,
        "nj": 4,
        "Entertainment": 3,
        "BCTSports": 3,
        "Sports": 3,
        "teaching": 3,
        "realestate": 3,
        "LightTheNight": 3,
        "vtrealty": 2,
        "OnMuni": 2,
        "pinktournament": 2,
        "THWND": 2,
        "ProudtobePINK": 2,
        "tltechlive": 2,
        "savannah": 2,
        "Lawrenceville": 2,
        "FarmersMarket": 2,
        "pdsathletics": 2,
        "deluxecares": 2,
        "pf80": 2,
        "Ninjas": 2,
        "RVVBGirls": 2,
        "GoRV": 2,
        "southjersey": 2,
        "NJspots": 1,
        "ShakespeareSunday": 1,
        "OpenHouse": 1,
        "USBands": 1,
        "waterRestrictions": 1,
        "STEAM": 1,
        "concert": 1,
        "ConcertAcrossAmerica": 1,
        "SPECIAL": 1,
        "homeforsale": 1,
        "realtor": 1,
        "halloween": 1,
        "princeton": 1,
        "WWPSvsPRIN": 1,
        "RVPride": 1,
        "LiveAtWindsor": 1,
        "marchingband": 1,
        "WindsorAtWestUniversity": 1,
        "Truth": 1,
        "SimonandGarfunkel": 1,
        "workinghard": 1,
        "University": 1,
        "walk4hearing": 1,
        "CollegeNews": 1,
        "lgbr": 1,
        "october": 1,
        "LuxuryApartments": 1,
        "EndGunViolence": 1,
        "attilaontheroad": 1,
        "EdCampNJ16": 1,
        "njfootball": 1,
        "sbpdchat": 1,
        "Motorist": 1,
        "cedarcrestcollege": 1,
        "JuniorTennis": 1,
        "Assumption": 1,
        "livemusic": 1,
        "JrTennis": 1,
        "EdTechBridge": 1,
        "cklw": 1,
        "owner": 1,
        "Tennis": 1,
        "art": 1,
        "hudl": 1,
        "West": 1,
        "njed": 1,
        "South": 1,
        "FloorPlan": 1,
        "njea": 1,
        "WaterIsLife": 1,
        "Andre": 1,
        "batman": 1,
        "NJspotsFall": 1,
        "bookishTwitter": 1,
        "West Windsor": 1,
        "Halloween": 1
    }
});
__DOC__;
echo $json;
?>

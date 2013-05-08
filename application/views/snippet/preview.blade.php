
<?PHP
$url = $snippet->url;
$parsedURL = parse_url($url);
$code = $snippet->code;
$sr = $snippet->shoprecord;
$originalPageContent = file_get_contents($url);

// Recreate the shop record comment caps
$s1 = "(<!-- Shop:[0-9]{5}_" . $sr . " \[Main\] START -->)";
$s2 = "(<!-- Shop:[0-9]{5}_" . $sr . " \[Main\] END -->)";

// extract shop record content
$pageContent = preg_replace('/'.$s1.'([\s\S\n]+?|)'.$s2.'/i', "$1 \n $code \n $3", $originalPageContent);
$pageContent = preg_replace('/("|\')(\/|)(Content|en-us|scripts|css|common|shopping|boys|girls|men|women|productimages|images|akamai|webservices|app_themes)/i', "$1$parsedURL[scheme]://$parsedURL[host]/$3", $pageContent);
?>

{{$pageContent}}



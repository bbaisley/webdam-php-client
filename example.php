<?php
require __DIR__ . '/vendor/autoload.php';
// Create instance of REST client
$presto = new Presto\Presto(array(CURLOPT_VERBOSE=>true));
$response = new bbaisley\Response();
$api = new bbaisley\Api($id, $secret, $presto, $response);
$api->setAccess($access_token, $expires, $refresh_token);
/*
print_r($api->refreshAccess());
exit();
*/
//print_r($api->refreshAccess());
//print_r($api->folders());
//print_r($api->createFolder('Testing 03'));
/*
print_r($api->editFolder(349398, array('name'=>'Edit Test') ));
exit();
*/
//print_r($api->deleteFolder(347279));
//print_r($api->uploadAsset(347278,'http://image.shutterstock.com/display_pic_with_logo/154447/98931878/stock-photo-happy-family-resting-at-beach-in-summer-98931878.jpg'));
//print_r($api->uploadAsset(347278,'/Users/bbaisley/Enterprise_Team01.jpg'));
/*
$assets = $api->folderAssets(347278);
print_r(json_decode($assets->data));
*/
/*
$f = $api->folders();
$f = json_decode($f->data);
print_r($f);
*/
/*
print_r(json_decode($api->asset(9194685)->data));
print_r($api->editAsset(9194685, array('description'=>'Happy family resting') ));
*/
//print_r($api->editAssetMeta(9194685, array('keyword'=>'active, activity, baby, beach, casual, cheerful, child, childcare, childhood, cute, daughter, day, elementary, expression, family, female, freedom, fun, game, generation, girl, group, hands, happy, healthy, human, infant, joyful, kid, leisure, lifestyle, mother, outdoors, outside, palyful, parent, parenting, people, playing, preschooler, resting, sand, sea, small, summer, sun, toddler, togetherness, vacations, woman')));
//print_r($api->editAssetMeta(9194685, array('City'=>'New York City')));
//print_r(json_decode($api->search('stock')->data));
//print_r($api->createLightbox('Testing01'));
print_r($api->editLightbox(79073, 'Testing this 01'));

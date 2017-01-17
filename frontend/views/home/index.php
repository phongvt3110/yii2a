<?php

echo Yii::$app->basePath.'<br>';//   /var/www/weshop-v2-frontend/weshop
echo Yii::$app->getBasePath().'/public/data/template<br>';//  /var/www/weshop-v2-frontend/weshop
echo Yii::$app->getHomeUrl().'data/template<br>';	// /



echo Yii::getVersion().'<br>';
echo Yii::powered();
Yii::setAlias('@my', '/var/www/yii2a/backend/public');
echo Yii::getAlias('@yii');
echo '<br>';
echo Yii::getAlias('@my').'<br>';
echo Yii::$app->language;
echo '<br>';
echo 'basePath: '. Yii::$app->basePath;
echo '<br>';
echo 'homeUrl: '. Yii::$app->homeUrl;
echo '<br>';
print_r( Yii::$aliases['@yii']);
echo '<br>';




                                            // <button type="file" class="btn btn-default btn-track btn-upload" id = "upload-template-excel-file"
                                            //         accept="application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,.csv"
                                            //         >Upload file</button>
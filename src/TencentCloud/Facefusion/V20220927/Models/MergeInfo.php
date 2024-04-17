<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Facefusion\V20220927\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 人脸图片和待被融合的素材模板图的人脸位置信息。
 *
 * @method string getImage() 获取输入图片base64
 * @method void setImage(string $Image) 设置输入图片base64
 * @method string getUrl() 获取输入图片url
 * @method void setUrl(string $Url) 设置输入图片url
 * @method FaceRect getInputImageFaceRect() 获取上传的图片人脸位置信息（人脸框）
 * @method void setInputImageFaceRect(FaceRect $InputImageFaceRect) 设置上传的图片人脸位置信息（人脸框）
 * @method string getTemplateFaceID() 获取素材人脸ID，不填默认取最大人脸。
 * @method void setTemplateFaceID(string $TemplateFaceID) 设置素材人脸ID，不填默认取最大人脸。
 * @method FaceRect getTemplateFaceRect() 获取模板中人脸位置信息(人脸框)，不填默认取最大人脸。此字段仅适用于图片融合自定义模板素材场景。
 * @method void setTemplateFaceRect(FaceRect $TemplateFaceRect) 设置模板中人脸位置信息(人脸框)，不填默认取最大人脸。此字段仅适用于图片融合自定义模板素材场景。
 */
class MergeInfo extends AbstractModel
{
    /**
     * @var string 输入图片base64
     */
    public $Image;

    /**
     * @var string 输入图片url
     */
    public $Url;

    /**
     * @var FaceRect 上传的图片人脸位置信息（人脸框）
     */
    public $InputImageFaceRect;

    /**
     * @var string 素材人脸ID，不填默认取最大人脸。
     */
    public $TemplateFaceID;

    /**
     * @var FaceRect 模板中人脸位置信息(人脸框)，不填默认取最大人脸。此字段仅适用于图片融合自定义模板素材场景。
     */
    public $TemplateFaceRect;

    /**
     * @param string $Image 输入图片base64
     * @param string $Url 输入图片url
     * @param FaceRect $InputImageFaceRect 上传的图片人脸位置信息（人脸框）
     * @param string $TemplateFaceID 素材人脸ID，不填默认取最大人脸。
     * @param FaceRect $TemplateFaceRect 模板中人脸位置信息(人脸框)，不填默认取最大人脸。此字段仅适用于图片融合自定义模板素材场景。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("InputImageFaceRect",$param) and $param["InputImageFaceRect"] !== null) {
            $this->InputImageFaceRect = new FaceRect();
            $this->InputImageFaceRect->deserialize($param["InputImageFaceRect"]);
        }

        if (array_key_exists("TemplateFaceID",$param) and $param["TemplateFaceID"] !== null) {
            $this->TemplateFaceID = $param["TemplateFaceID"];
        }

        if (array_key_exists("TemplateFaceRect",$param) and $param["TemplateFaceRect"] !== null) {
            $this->TemplateFaceRect = new FaceRect();
            $this->TemplateFaceRect->deserialize($param["TemplateFaceRect"]);
        }
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ApiBizResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return[
        'bizId' =>$this->bizId,
        'bizName' =>$this->bizName,
        'bizStreetNum' =>$this->bizStreetNum,
        'bizNeigborhood' =>$this->bizNeigborhood,
        'bizState'=>$this->bizState,
        'bizCity'=>$this->bizCity,
        'bizLat'=>$this->bizLat,
        'bizLon'=>$this->bizLon,
        'bizTel'=>$this->bizTel,
        'bizContact'=>$this->bizContact,
        'bizWhatsApp'=>$this->bizWhatsApp,
        'bizFacebook'=>$this->bizFacebook,
        'bizWeb'=>$this->bizWeb,
        'bizEmail'=>$this->bizEmail,
        'bizImage'=>$this->bizImage,
        'bizcatId'=>$this->bizcatId,
        'bizLastvisit'=>$this->bizLastvisit,
        'bizcatName'=>$this->bizcatName
        ];
    }
}

<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;

trait RelatedItemTrait
{
    /**
     * Related items
     *
     * @return string
     */
    public function getRelatedAttribute()
    {
        return self::where('id', '<>', $this->id)->get()->filter(function (Model $model) {

            $flag = false;
            // Check related tag
            foreach ($this->tags as $tag) {
                if($model->tags->contains($tag)) {
                    $flag = true;
                    break;
                }
            }
            // Check related category
            if($model->category->id === $this->category->id) $flag = true;

            return $flag;
        })->take(10);
    }
}
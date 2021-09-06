<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Event extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;
    public  function getImage($content){
        preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $content, $image);
        return isset($image['src'])?$image['src']:"";
    }
    public  function getImageAll($content){
        // preg_match_all('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $content, $images);
        preg_match_all('/<img(.*?)src=("|\'|)(.*?)("|\'| )(.*?)>/s', $content, $images);
        // return isset($image['src'])?$image['src']:[];
        return $images[3];
    }
    public function getLimitedContent($content){
        if(strlen($content) < 150){
            echo $content;
        }else{
        preg_match_all('/<div>(.*?)<\/div>/s', html_entity_decode($content), $div);
        preg_match_all('/<p>(.*?)<\/p>/s', html_entity_decode($content), $p);
        $match = count($div[0]) > 1 ? $div[0] : $p[0];
        for ($i=0; $i < 2 ; $i++) {
            echo  isset($match[$i])?$match[$i]:"";

        }
    }
    }
    public function getNumbersOfComment($id){
        $comment = Comments::where('blog_id', $id)->get();
        return count($comment);

    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}

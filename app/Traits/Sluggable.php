<?php
namespace App\Traits;


trait Sluggable
{
	public static function bootSluggable()
	{
		static::creating(function ($model) {

			$settings = $model->sluggable();
			$source = $settings["source"];
			$model->slug = str_slug($model->$source);
			$latestSlug =
               static::whereRaw("slug = '$model->slug' or slug LIKE '$model->slug-%'")
                   ->latest('id')
                   ->value('slug');
            if ($latestSlug) {
               $pieces = explode('-', $latestSlug);

               $number = intval(end($pieces));

               $model->slug .= '-' . ($number + 1);
           }

		});
	}

	abstract public function sluggable(): array;

	
}
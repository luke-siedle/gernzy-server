<?php

    namespace Gernzy\Server\Models;

    use Illuminate\Database\Eloquent\Model;

    class Tag extends Model
    {


        /**
         * The table associated with the model.
         *
         * @var string
         */
        protected $table = 'gernzy_tags';

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'tag',
            'name'
        ];

        /**
         * The attributes that should be hidden for arrays.
         *
         * @var array
         */
        protected $hidden = [
        ];

        /**
         * The attributes that should be cast to native types.
         *
         * @var array
         */
        protected $casts = [
        ];


        /**
         * Product relation
         *
         * @var $query
         */
        public function products()
        {
            return $this->morphedByMany(Product::class, 'taggable', 'gernzy_taggables')->withTimestamps();
        }
    }

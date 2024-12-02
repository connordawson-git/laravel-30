<?php

namespace App\Models;


class Job
{
    public static function all(): array
    {
        return [
            [
                'id' => '1',
                'title' => 'director',
                'salary' => '£100,000'
            ],
            [
                'id' => '2',
                'title' => 'programmer',
                'salary' => '£50,000'
            ],
            [
                'id' => '3',
                'title' => 'teacher',
                'salary' => '£30,000'
            ]
        ];
    }
}

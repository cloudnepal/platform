<?php

declare(strict_types=1);

namespace Orchid\Platform\Http\Layouts\Comment;

use Orchid\Platform\Fields\Field;
use Orchid\Platform\Layouts\Rows;

class CommentEditLayout extends Rows
{
    /**
     * Views.
     *
     * @throws \Orchid\Platform\Exceptions\TypeException
     *
     * @return array
     */
    public function fields(): array
    {
        $fields[] = Field::tag('textarea')
                         ->name('comment.content')
                         ->max(255)
                         ->rows(10)
                         ->required()
                         ->title(trans('platform::systems/comment.content'))
                         ->help(trans('platform::systems/comment.user_comment'));

        $fields[] = Field::tag('checkbox')
                    ->name('comment.approved')
                    ->title(trans('platform::systems/comment.checking'))
                    ->help(trans('platform::systems/comment.show_comment'));

        return $fields;
    }
}

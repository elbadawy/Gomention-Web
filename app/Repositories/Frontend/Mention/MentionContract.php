<?php

namespace Gomention\Repositories\Frontend\Mention;

/**
 * Interface MentionContract
 * @package Gomention\Repositories\Frontend\Mention
 */
interface MentionContract {

    /**
     * @return mixed
     */
    public function getMentions();

    /**
     * @param $type
     * @param $to_user_id
     * @param array $data
     * @return mixed
     */
    public function mention($type, $to_user_id, Array $data);

}
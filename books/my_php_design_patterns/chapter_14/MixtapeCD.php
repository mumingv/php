<?php
/**
 * MixtapeCD类
 */

class MixtapeCD extends CD {
    public function __clone() {
        $this->title = 'Mixtape';  // 专辑名称
    }
}

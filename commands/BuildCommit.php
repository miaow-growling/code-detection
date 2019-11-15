<?php
/**
 * Created by PhpStorm.
 * User: hel04
 * Date: 2019/11/13
 * Time: 20:26
 */

namespace git\commands;

/**
 * Class BuildCommit
 * @package git\commands
 */
class BuildCommit
{
    const COMMIT_FILE = __DIR__ . '/../hooks/pre-commit';
    const GIT_HOOKS_COMMIT_FILE = __DIR__ . '/../../.git/hooks/pre-commit';

    public static function copyCommitFile()
    {
        if (copy(self::COMMIT_FILE, self::GIT_HOOKS_COMMIT_FILE)) {
            echo '复制git钩子文件成功';
        } else {
            echo '复制git钩子文件成功';
        }
    }
}

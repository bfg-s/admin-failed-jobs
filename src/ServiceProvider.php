<?php

namespace Admin\Extend\AdminFailedJobs;

use Admin\ExtendProvider;
use Admin\Core\ConfigExtensionProvider;
use Admin\Extend\AdminFailedJobs\Extension\Config;
use Admin\Extend\AdminFailedJobs\Extension\Install;
use Admin\Extend\AdminFailedJobs\Extension\Navigator;
use Admin\Extend\AdminFailedJobs\Extension\Uninstall;
use Admin\Extend\AdminFailedJobs\Extension\Permissions;

/**
 * Class ServiceProvider
 * @package Admin\Extend\AdminFailedJobs
 */
class ServiceProvider extends ExtendProvider
{
    /**
     * Extension ID name
     * @var string
     */
    public static string $name = "bfg/admin-failed-jobs";

    /**
     * Extension call slug
     * @var string
     */
    static string $slug = "bfg_admin_failed_jobs";

    /**
     * Extension description
     * @var string
     */
    public static string $description = "Laravel filed jobs viewer for bfg admin";

    /**
     * @var string
     */
    protected string $navigator = Navigator::class;

    /**
     * @var string
     */
    protected string $install = Install::class;

    /**
     * @var string
     */
    protected string $uninstall = Uninstall::class;

    /**
     * @var ConfigExtensionProvider|string
     */
    protected string|ConfigExtensionProvider $config = Config::class;
}


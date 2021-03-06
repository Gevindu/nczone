<?php

namespace eru\nczone\tests\config;

use eru\nczone\config\config;
use PHPUnit\Framework\TestCase;

class config_test extends TestCase
{
    /**
     * @dataProvider module_data_provider
     */
    public function test_module_data($settings, $expected)
    {
        $this->assertSame($expected, config::module_data($settings));
    }

    public function module_data_provider()
    {
        return [
            [['some', 'settings', 'lul'], [
                ['config.add', ['some', config::default('some')]],
                ['config.add', ['settings', config::default('settings')]],
                ['config.add', ['lul', config::default('lul')]],
            ]],
            [config::ACL_CONFIG_KEYS, [
                ['config.add', [config::rules_post_id, config::default(config::rules_post_id)]],
                ['config.add', [config::match_forum_id, config::default(config::match_forum_id)]],
                ['config.add', [config::pmatches_page_size, config::default(config::pmatches_page_size)]],
                ['config.add', [config::activity_time, config::default(config::activity_time)]],
                ['config.add', [config::activity_1, config::default(config::activity_1)]],
                ['config.add', [config::activity_2, config::default(config::activity_2)]],
                ['config.add', [config::activity_3, config::default(config::activity_3)]],
                ['config.add', [config::activity_4, config::default(config::activity_4)]],
                ['config.add', [config::activity_5, config::default(config::activity_5)]],
                ['config.add', [config::draw_time, config::default(config::draw_time)]],
                ['config.add', [config::bet_time, config::default(config::bet_time)]],
                ['config.add', [config::points_1vs1, config::default(config::points_1vs1)]],
                ['config.add', [config::points_2vs2, config::default(config::points_2vs2)]],
                ['config.add', [config::points_3vs3, config::default(config::points_3vs3)]],
                ['config.add', [config::points_4vs4, config::default(config::points_4vs4)]],
                ['config.add', [config::extra_points, config::default(config::extra_points)]],
                ['config.add', [config::info_posts, config::default(config::info_posts)]],
                ['config.add', [config::draw_player_civs, config::default(config::draw_player_civs)]],
                ['config.add', [config::draw_team_civs, config::default(config::draw_team_civs)]],
                ['config.add', [config::draw_match_extra_civs_1vs1, config::default(config::draw_match_extra_civs_1vs1)]],
                ['config.add', [config::draw_match_extra_civs_2vs2, config::default(config::draw_match_extra_civs_2vs2)]],
                ['config.add', [config::draw_match_extra_civs_3vs3, config::default(config::draw_match_extra_civs_3vs3)]],
                ['config.add', [config::draw_match_extra_civs_4vs4, config::default(config::draw_match_extra_civs_4vs4)]],
                ['config.add', [config::draw_team_extra_civs_1vs1, config::default(config::draw_team_extra_civs_1vs1)]],
                ['config.add', [config::draw_team_extra_civs_2vs2, config::default(config::draw_team_extra_civs_2vs2)]],
                ['config.add', [config::draw_team_extra_civs_3vs3, config::default(config::draw_team_extra_civs_3vs3)]],
                ['config.add', [config::draw_team_extra_civs_4vs4, config::default(config::draw_team_extra_civs_4vs4)]],
                ['config.add', [config::draw_player_num_civs_1vs1, config::default(config::draw_player_num_civs_1vs1)]],
                ['config.add', [config::draw_player_num_civs_2vs2, config::default(config::draw_player_num_civs_2vs2)]],
                ['config.add', [config::draw_player_num_civs_3vs3, config::default(config::draw_player_num_civs_3vs3)]],
                ['config.add', [config::draw_player_num_civs_4vs4, config::default(config::draw_player_num_civs_4vs4)]],
                ['config.add', [config::draw_factor, config::default(config::draw_factor)]],
            ]],
            [config::CRON_CONFIG_KEYS, [
                ['config.add', ['nczone_activity_cron', config::default('nczone_activity_cron')]],
            ]],
        ];
    }
}

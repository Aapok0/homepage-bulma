<?php

return [
    [
        'column_title' => 'Development',
        'categories' => [
            [
                'title' => 'Web development',
                'id' => 'web',
                'percent' => 60,
                'items' => [
                    ['name' => 'HTML', 'percent' => 80],
                    ['name' => 'CSS', 'percent' => 75],
                    ['name' => 'Javascript', 'percent' => 60],
                    ['name' => 'PHP', 'percent' => 10],
                    ['name' => 'React', 'percent' => 35],
                ],
            ],
            [
                'title' => 'Programming/scripting',
                'id' => 'prog',
                'percent' => 50,
                'items' => [
                    ['name' => 'Python', 'percent' => 70],
                    ['name' => 'C', 'percent' => 25],
                    ['name' => 'Shell script', 'percent' => 50],
                ],
            ],
            [
                'title' => 'Infrastructure as Code',
                'id' => 'iac',
                'percent' => 65,
                'items' => [
                    ['name' => 'Ansible', 'percent' => 65],
                    ['name' => 'Terraform', 'percent' => 65],
                ],
            ],
            [
                'title' => 'UI/UX',
                'id' => 'uiux',
                'percent' => 25,
                'items' => [
                    ['name' => 'Qt', 'percent' => 35],
                    ['name' => 'Figma', 'percent' => 25],
                ],
            ],
        ],
    ],
    [
        'column_title' => 'Services and tools',
        'categories' => [
            [
                'title' => 'Cloud',
                'id' => 'cloud',
                'percent' => 55,
                'items' => [
                    ['name' => 'Azure', 'percent' => 65],
                    ['name' => 'AWS', 'percent' => 10],
                ],
            ],
            [
                'title' => 'Services',
                'id' => 'services',
                'percent' => 35,
                'items' => [
                    ['name' => 'Nginx', 'percent' => 45],
                    ['name' => 'GitHub', 'percent' => 65],
                    ['name' => 'GitLab', 'percent' => 25],
                    ['name' => 'Bitbucket', 'percent' => 35],
                    ['name' => 'Jenkins', 'percent' => 10],
                    ['name' => 'Artifactory', 'percent' => 40],
                    ['name' => 'Hashicorp Vault', 'percent' => 35],
                    ['name' => 'Jira', 'percent' => 20],
                    ['name' => 'Confluence', 'percent' => 35],
                    ['name' => 'Zabbix', 'percent' => 30],
                ],
            ],
            [
                'title' => 'Terminal tools',
                'id' => 'term',
                'percent' => 65,
                'items' => [
                    ['name' => 'Git', 'percent' => 70],
                    ['name' => 'Vim/Neovim', 'percent' => 65],
                    ['name' => 'tmux', 'percent' => 50],
                ],
            ],
        ],
    ],
];

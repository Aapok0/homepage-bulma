<?php

return [
    [
        'column_title' => 'DevOps & infrastructure',
        'categories' => [
            [
                'title' => 'Containers & orchestration',
                'items' => [
                    ['name' => 'Kubernetes', 'tier' => 'production'],
                    ['name' => 'Helm', 'tier' => 'production'],
                    ['name' => 'Docker', 'tier' => 'production'],
                ],
            ],
            [
                'title' => 'CI/CD & automation',
                'items' => [
                    ['name' => 'Jenkins', 'tier' => 'production'],
                    ['name' => 'Argo CD', 'tier' => 'production'],
                    ['name' => 'Argo Workflows', 'tier' => 'production'],
                    ['name' => 'Ansible', 'tier' => 'production'],
                    ['name' => 'Terraform', 'tier' => 'production'],
                    ['name' => 'GitHub Actions', 'tier' => 'production'],
                ],
            ],
            [
                'title' => 'Cloud & platforms',
                'items' => [
                    ['name' => 'Azure', 'tier' => 'production'],
                    ['name' => 'Linux', 'tier' => 'production'],
                    ['name' => 'Nginx', 'tier' => 'production'],
                    ['name' => 'AWS', 'tier' => 'learning'],
                ],
            ],
        ],
    ],
    [
        'column_title' => 'Operations & development',
        'categories' => [
            [
                'title' => 'Monitoring & observability',
                'items' => [
                    ['name' => 'Prometheus', 'tier' => 'production'],
                    ['name' => 'Grafana', 'tier' => 'production'],
                    ['name' => 'Sensu', 'tier' => 'production'],
                    ['name' => 'Zabbix', 'tier' => 'production'],
                ],
            ],
            [
                'title' => 'Databases',
                'items' => [
                    ['name' => 'MySQL', 'tier' => 'production'],
                    ['name' => 'ProxySQL', 'tier' => 'production'],
                    ['name' => 'MariaDB', 'tier' => 'working'],
                    ['name' => 'PostgreSQL', 'tier' => 'working'],
                ],
            ],
            [
                'title' => 'Scripting & development',
                'items' => [
                    ['name' => 'Bash', 'tier' => 'daily'],
                    ['name' => 'Python', 'tier' => 'daily'],
                    ['name' => 'HTML', 'tier' => 'working'],
                    ['name' => 'CSS', 'tier' => 'working'],
                    ['name' => 'JavaScript', 'tier' => 'working'],
                    ['name' => 'React', 'tier' => 'learning'],
                    ['name' => 'PHP', 'tier' => 'learning'],
                    ['name' => 'C', 'tier' => 'learning'],
                    ['name' => 'Go', 'tier' => 'learning'],
                ],
            ],
            [
                'title' => 'Collaboration & tooling',
                'items' => [
                    ['name' => 'GitHub', 'tier' => 'daily'],
                    ['name' => 'GitLab', 'tier' => 'working'],
                    ['name' => 'Bitbucket', 'tier' => 'production'],
                    ['name' => 'Jira', 'tier' => 'daily'],
                    ['name' => 'Confluence', 'tier' => 'daily'],
                    ['name' => 'Artifactory', 'tier' => 'working'],
                    ['name' => 'Hashicorp Vault', 'tier' => 'working'],
                    ['name' => 'Git', 'tier' => 'daily'],
                    ['name' => 'Make', 'tier' => 'working'],
                    ['name' => 'Vim/Neovim', 'tier' => 'daily'],
                    ['name' => 'tmux', 'tier' => 'daily'],
                ],
            ],
        ],
    ],
];

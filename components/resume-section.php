<?php
$textClass = 'is-size-5-widescreen is-size-6-desktop is-size-7-mobile';

function render_resume_entries(array $entries, string $textClass): void
{
    $lastGroup = null;

    foreach ($entries as $entry) {
        if (($entry['type'] ?? '') === 'organization') {
            include __DIR__ . '/resume-entry-organization.php';
            continue;
        }

        if (!empty($entry['group']) && $entry['group'] !== $lastGroup) {
            $lastGroup = $entry['group'];
            echo '<h3 class="subtitle is-size-5 is-size-6-mobile is-family-code resume-subtitle">';
            echo htmlspecialchars($lastGroup, ENT_QUOTES, 'UTF-8');
            echo '</h3>';
        }

        echo '<article class="resume-entry">';
        if (!empty($entry['heading']) && empty($entry['href'])) {
            echo '<h4 class="subtitle is-size-6 is-family-code mt-4 mb-1">';
            echo htmlspecialchars($entry['heading'], ENT_QUOTES, 'UTF-8');
            echo '</h4>';
        }
        if (!empty($entry['primary'])) {
            echo '<p class="resume-meta is-family-code ' . $textClass . '">';
            echo htmlspecialchars($entry['primary'], ENT_QUOTES, 'UTF-8');
            echo '</p>';
        }
        if (!empty($entry['dates'])) {
            echo '<p class="resume-meta ' . $textClass . '">';
            echo htmlspecialchars($entry['dates'], ENT_QUOTES, 'UTF-8');
            echo '</p>';
        }
        if (!empty($entry['href'])) {
            echo '<p class="resume-meta is-family-code ' . $textClass . '"><a href="';
            echo htmlspecialchars($entry['href'], ENT_QUOTES, 'UTF-8');
            echo '">';
            echo htmlspecialchars($entry['heading'], ENT_QUOTES, 'UTF-8');
            echo '</a></p>';
        }
        foreach ($entry['details'] ?? [] as $detail) {
            echo '<p class="resume-detail ' . $textClass . '">';
            echo htmlspecialchars($detail, ENT_QUOTES, 'UTF-8');
            echo '</p>';
        }
        echo '</article>';
    }
}

function render_resume_section(array $section, string $textClass): void
{
    $isCollapsed = !empty($section['collapsed']);
    $marginClass = empty($section['last']) ? ' mb-5' : '';
    $boxClass = 'box content-section background-1' . $marginClass;

    if ($isCollapsed) {
        echo '<details class="content-collapsible resume-disclosure ' . $boxClass . '">';
        echo '<summary class="content-section-title title is-size-3 is-size-4-mobile is-family-code resume-disclosure-summary">';
        echo htmlspecialchars($section['title'], ENT_QUOTES, 'UTF-8');
        echo '</summary>';
        echo '<div class="content-collapsible-body">';
    } else {
        echo '<div class="' . $boxClass . '">';
        echo '<h2 class="content-section-title title is-size-3 is-size-4-mobile is-family-code">';
        echo htmlspecialchars($section['title'], ENT_QUOTES, 'UTF-8');
        echo '</h2>';
    }

    if (!empty($section['context'])) {
        echo '<p class="resume-context is-family-code ' . $textClass . '">';
        echo htmlspecialchars($section['context'], ENT_QUOTES, 'UTF-8');
        echo '</p>';
    }

    render_resume_entries($section['entries'] ?? [], $textClass);

    if (!empty($section['collapsed_entries'])) {
        echo '<details class="resume-collapsible resume-disclosure mt-4">';
        echo '<summary class="subtitle is-size-5 is-size-6-mobile is-family-code resume-disclosure-summary">';
        echo htmlspecialchars($section['collapsed_summary'] ?? 'Show more', ENT_QUOTES, 'UTF-8');
        echo '</summary>';
        echo '<div class="resume-collapsible-body">';
        render_resume_entries($section['collapsed_entries'], $textClass);
        echo '</div></details>';
    }

    echo $isCollapsed ? '</div></details>' : '</div>';
}

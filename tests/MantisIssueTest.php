<?php

namespace SC\MantisIssue\Test;
use SC\MantisIssue\MantisIssue;
use SC\MantisIssue\MantisConnect;

class MantisIssueTest extends \PHPUnit_Framework_TestCase
{
    public function testInsertTicket()
    {
        $repo_url = 'http://#####/api/soap/mantisconnect.php?wsdl';
        $repo_user = '######';
        $repo_pass = '######';
        $repo_project_id = 1;
        $repo_project_name = '#####';

        $issue = new MantisIssue($repo_url, $repo_user, $repo_pass);

        $issueData = new \SC\MantisIssue\IssueData();

        $issueData->project = new \SC\MantisIssue\ProjectData();
        $issueData->project->id = $repo_project_id;
        $issueData->category = "Bug Report";
        $issueData->summary = "Testing via PHPUnit";
        $issueData->description = "One more thing...";

        $issue->client->mc_issue_add($repo_user, $repo_pass, $issueData);
    }
}

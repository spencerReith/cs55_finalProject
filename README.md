# Spencer Reith & Jackson Easley
# 24X – COSC55
# Final Project

### Introduction

This readme gives a brief overview for our final project for COSC55.

In order to keep the bulk of our information in one place, and in a digestible format, this readme will be kept brief.

Further information can be found on our 'Wiki' page. Said page provides descriptions of each 'Milestone'. Each milestone has one (or more) pages in our Wiki.
'Milestone 4 (Task 1)' contains a comprehensive overview of our project's implementation. 'Milestone 4 (Task 2)' provides more detail on our project site's finalization, and provides a summary of our project. References are laid out at the bottom of 'Milestone 4 (Task 1)'.

### Project Overview

**Problem Statement:** How can we defend a political campaign fundraising site from a DDoS attack? What AWS recources should we use? How can we simulate an attack? What should we do in response to the attack?

In our project, we simulate a Distributed Denial of Service attack against a political fundraising site. We achieved this by launching multiple servers who run as 'attackers', and a two servers to run as the 'Political Campaigns'. One of the campaigns is refered to as the 'Unprotected Campaign', because it holds minimal security features. The other campaign is well protecrted by several AWS Resources, described in 'Milestone 4 (Task 1)'. This is our security solution. We launched 3 total attacks, and analyzed the effects of said attacks against the unprotected and protected servers.

In summary, our security solution (demonstrated on the 'Protected Campaign') is useful to equip any website to defend against DDoS attacks. And, our attack plans can be mimicked to penTest your site, and ensure your alarms are configured correctly. In our example, we imagined that there was a big campaign fundraising event, in which it was extremely important for a user to get to the site and donate, while it was still on their mind. Meanwhile, a political opposition force launched a DDoS attack to stop users from donating to the political campaign. In reality, DDoS attacks can be launched against a variety of services. And, we believe our solution is a comprehensive defense in any of those situations.

### Key Features

We used several AWS resources and programming languages to create our Cloud environment and implementation. These are listed below, and elaborated on in 'Milestone 4 (Task 1)'.

**We used the following AWS services:**
- AWS SNS
- Amazon Route53
- AWS CloudWatch
- AWS Shield Standard
- AWS EC2 Instances (2 holding websites for our political campaign, and 6 used as DDoS attackers)

**We programmed in the following languages:**
- HTML
- CSS
- PHP
- Bash

**We launched (and protected our servers against) 3 separate DoS and DDoS attacks:**
- 9,000 packet TCP Flood (originating from 1 server)
- 500,000 packet TCP Flood (originating from 5 servers)
- 10,000 packet TCP Flood that was stopped on purpose by AWS CloudWatch (originating from 5 servers)

**We attempted to use the following AWS Services, but for various reasons (described later in this write-up), we changed course:**
- AWS CloudFront
- AWS WAF

### Instructions for Replication / Set-Up Information
Instructions for Replecation and Set-Up Information are detailed in our **Project Summary**, in 'Milestone 4 (Task 2)'

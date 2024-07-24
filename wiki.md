__Spencer Reith & Jackson Easley__<br>
__CS55 Final Project__<br>
__24X__<br>

__Element of Cloud Security that will be the focus of our project:__<br>
Services to protect web applications from common exploits and DDoS attacks.

__AWS Services that are relevant to the topic:__<br>
AWS Shield
AWS Shield+
AWS  CloudFront
AWS CloudWatch
AWS WAF (contained in cloudfront; contained in AWS Firewall Manager)
Global Accelerator
Amazon Route 53
AWS Firewall Manager

Based on our research, some of these services are very expensive, and in some cases overlap with each other. For example, WAF is contained in Cloudfront. And, WAF is contained in the Firewall Manager, which is contained in Shield+. Based on this article https://aws.amazon.com/shield/features/#:~:text=AWS%20Shield%20is%20a%20managed,to%20 benefit%20from%20DDoS%20protection,we plan to use Shield (standard), in conjunction with Cloudfront and Route 53. Shield will provide protection against network and transport layer DDoS attacks, while Cloudfront and Route 53 will protect against attacks on layers 3 and 4. We will plan to send alerts to the user if there is a suspicious uptick in traffic, and plan to shut down the relevant instance(s) if there is a clearly malicious uptick in traffic.

__Tutorials, documentation, and other resources that will assist you in deploying the service:__<br>
See ‘references.md’

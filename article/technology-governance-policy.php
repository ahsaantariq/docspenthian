<!DOCTYPE html>
<!-- This site was created in Webflow. https://webflow.com -->
<!-- Last Published: Wed Oct 09 2024 16:05:01 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="netdocs-template.webflow.io" data-wf-page="660ab621d4d165dd982fe5b5" data-wf-site="65f1bda3afbf12c329f9dfa2" lang="en" data-wf-collection="660ab621d4d165dd982fe541" data-wf-item-slug="working-with-components">
  <head>
    <meta charset="utf-8" />
    <title>Technology Governance & Infrastructure Policy – Penthian Ltd</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <link href="../style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
      ! function(o, c) {
        var n = c.documentElement,
          t = " w-mod-";
        n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
      }(window, document);
    </script>
    <link href="https://www.penthian.com/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="https://www.penthian.com/favicon.ico" rel="apple-touch-icon" />
     <style>
        h1 {
            
            text-align: center;
        }
        h2 {
           
            margin-top: 20px;
        }
      
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        p, ul {
            margin: 10px 0;
        }
        .signature {
            margin-top: 40px;
        }
        .signature p {
            margin: 5px 0;
        }
    </style>
  </head>
  <body>
     <?php include '../src/header.php'; ?>
    <section class="section">
      <div class="container container-layout">
        <?php include '../src/sidebar.php'; ?>
        
        <div class="layout-content-outer-wrapper">
          <div class="layout-content-inner-wrapper">
            <div class="content-title">
              <div class="content-title-breadcrumbs">
                <a href="/" class="link-breadcrumb">Home</a>
                <div class="content-title-breadcrumbs-link">
                  <img src="https://cdn.prod.website-files.com/65f1bda3afbf12c329f9dfa2/660ac3f8ce6d192d22dce7a8_icon__chevron.svg" loading="lazy" alt="" class="icon-xs" />
                  <a  class="link-breadcrumb">Core Application Documents</a>
                </div>
                <div class="content-title-breadcrumbs-link">
                  <img src="https://cdn.prod.website-files.com/65f1bda3afbf12c329f9dfa2/660ac3f8ce6d192d22dce7a8_icon__chevron.svg" loading="lazy" alt="" class="icon-xs" />
                  <a href="/article/technology-governance-policy" aria-current="page" class="link-breadcrumb w--current">Technology Governance Policy</a>
                </div>
              </div>
              <div class="w-layout-vflex v-flex-s">
                <h1 class="display-2xl">Technology Governance & Infrastructure Policy – Penthian Ltd</h1>

                <div class="content-title-meta">
                  <div>Last updated</div>
                  <div>October  19, 2025</div>
                </div>
              </div>
            </div>
            <div class="rich-text-content w-richtext">
       <h2>1. Purpose & Objectives</h2>
    <p>This Technology Governance & Infrastructure Policy sets out the principles, structures, and operational controls Penthian Ltd uses to govern its technology platform, ensure system reliability, support regulatory compliance, and scale securely as a Virtual Asset Marketplace (VASP) under the FSC Mauritius.</p>

    <h3>1.1 Purpose</h3>
    <p>The purpose of this policy is to:</p>
    <ul>
        <li>Define the governance framework that oversees Penthian’s technology lifecycle</li>
        <li>Ensure alignment between business goals, regulatory obligations, and technological execution</li>
        <li>Protect client and investor interests through secure, reliable, and scalable infrastructure</li>
        <li>Establish internal controls over platform development, deployment, and maintenance</li>
    </ul>

    <h3>1.2 Key Objectives</h3>
    <ol>
        <li><strong>Regulatory Compliance</strong><br>
            Ensure Penthian’s tech stack, deployment practices, and operational tools meet or exceed FSC, FATF, GDPR, and MiCA standards.</li>
        <li><strong>Platform Reliability</strong><br>
            Maintain 99.9% uptime, data resilience, and disaster recovery readiness for all mission-critical systems and services.</li>
        <li><strong>Security & Integrity</strong><br>
            Govern all code development, wallet infrastructure, smart contracts, and third-party integrations using secure engineering standards.</li>
        <li><strong>Transparency & Auditability</strong><br>
            Implement documentation, version control, and audit logging across infrastructure components to support internal and regulatory audits.</li>
        <li><strong>Scalability</strong><br>
            Build a cloud-native and modular architecture capable of supporting high transaction volumes, multiple asset types, and global user onboarding.</li>
        <li><strong>Innovation & Flexibility</strong><br>
            Allow rapid development and iteration across new features—such as fractional ownership, digital identity, DeFi liquidity, and DAO voting—without compromising controls.</li>
    </ol>

    <h2>2. Scope & Applicability</h2>
    <p>This policy applies to all technology systems, digital infrastructure, and software environments used in the operation of Penthian’s regulated activities as a Virtual Asset Marketplace (Class S) licensed by the FSC Mauritius.</p>

    <h3>2.1 Covered Systems & Platforms</h3>
    <p>The policy governs the following components:</p>
    <ul>
        <li>Penthian Primary Marketplace – for asset listing and tokenized sales</li>
        <li>Penthian Secondary Marketplace – for investor-to-investor trading</li>
        <li>Smart Contract Infrastructure – ERC-3643, ERC-1155, and associated on-chain logic</li>
        <li>Penthian Wallet Infrastructure – self-custody wallet and custodial integration</li>
        <li>Admin Console – platform backend for compliance, KYC, listing approvals, and risk management</li>
        <li>Cloud Hosting Environments – all cloud-based servers, VMs, and containers</li>
        <li>Third-Party Integrations – KYC (Veriff), messaging (email/SMS), analytics, and payment partners</li>
        <li>Internal Tools – ticketing systems, customer service portals, Slack, code repositories, etc.</li>
    </ul>

    <h3>2.2 Applicable Stakeholders</h3>
    <p>This policy applies to:</p>
    <ul>
        <li><strong>CTO & Technology Leadership</strong> – Responsible for strategy, compliance, and architecture decisions</li>
        <li><strong>Engineering & DevOps Teams</strong> – Responsible for development, deployment, and monitoring</li>
        <li><strong>Compliance Team</strong> – Responsible for ensuring technical systems align with FSC and FATF requirements</li>
        <li><strong>Third-party Developers & Auditors</strong> – Required to operate within policy guidelines</li>
        <li><strong>Board of Directors & Regulatory Liaison</strong> – Responsible for governance and oversight of technical risks</li>
    </ul>

    <h3>2.3 Regulatory Alignment</h3>
    <p>This policy aligns with the following regulatory and technical frameworks:</p>
    <ul>
        <li>FSC Mauritius – VAITOS Act 2021</li>
        <li>FATF Recommendations on Virtual Assets and VASPs</li>
        <li>MiCA (EU Markets in Crypto-Assets Regulation)</li>
        <li>ISO/IEC 27001 – Information Security Management</li>
        <li>NIST SP 800-53 – Security and Privacy Controls</li>
        <li>CIS Controls – Center for Internet Security Best Practices</li>
    </ul>

    <h2>3. Governance Structure & Responsibilities</h2>
    <p>Penthian Ltd has established a formal governance structure to oversee its technology strategy, infrastructure security, and compliance posture. Roles and responsibilities are clearly defined to ensure accountability, risk mitigation, and cross-functional alignment.</p>

    <h3>3.1 Board Oversight</h3>
    <ul>
        <li>The Board of Directors retains ultimate responsibility for technology risk oversight</li>
        <li>It approves the Technology Governance Policy and reviews quarterly updates on:</li>
        <ul>
            <li>Platform performance and downtime</li>
            <li>Breaches or incidents</li>
            <li>Compliance with FSC and FATF technical expectations</li>
        </ul>
        <li>The Board delegates operational responsibilities to the CTO and CISO</li>
    </ul>

    <h3>3.2 Chief Technology Officer (CTO)</h3>
    <p>The CTO is responsible for:</p>
    <ul>
        <li>Setting the overall technology strategy in alignment with Penthian’s business goals</li>
        <li>Ensuring the development stack and deployment practices follow best-in-class standards</li>
        <li>Approving architecture decisions, vendor selection, and key integrations</li>
        <li>Overseeing DevOps, infrastructure, smart contract roadmap, and performance metrics</li>
    </ul>

    <h3>3.3 Chief Information Security Officer (CISO)</h3>
    <p>The CISO ensures that:</p>
    <ul>
        <li>Security risks across infrastructure are assessed and mitigated</li>
        <li>Incident response protocols are maintained and tested</li>
        <li>Cybersecurity policy is implemented across all technology functions</li>
        <li>Access to infrastructure is reviewed and controlled</li>
        <li>Secure software development life cycle (SSDLC) is enforced</li>
    </ul>

    <h3>3.4 DevOps & Engineering Team</h3>
    <p>Responsible for:</p>
    <ul>
        <li>Writing and deploying secure, audited code</li>
        <li>Maintaining CI/CD pipelines with quality assurance gates</li>
        <li>Monitoring platform uptime, latency, and infrastructure usage</li>
        <li>Managing infrastructure-as-code and automation scripts</li>
        <li>Maintaining source code repositories, unit testing, and versioning</li>
    </ul>

    <h3>3.5 Compliance Officer</h3>
    <p>Works closely with technology teams to:</p>
    <ul>
        <li>Validate that system architecture supports KYC/AML, asset freezing, and wallet controls</li>
        <li>Ensure that updates to smart contracts are documented and audited</li>
        <li>Participate in regulatory and security audits as the liaison to the FSC</li>
        <li>Maintain logs of tech-related policy enforcement and third-party risk</li>
    </ul>

    <h3>3.6 External Vendors & Auditors</h3>
    <p>Third parties such as:</p>
    <ul>
        <li>Smart contract auditing firms</li>
        <li>Infrastructure providers (e.g., AWS, GCP)</li>
        <li>Security consultants</li>
    </ul>
    <p>Must meet Penthian’s minimum technical requirements and operate under non-disclosure and data processing agreements.</p>

    <h2>4. Infrastructure Architecture & Platform Design</h2>
    <p>Penthian's infrastructure is designed to be scalable, resilient, secure, and compliant. It supports digital ownership, fractional asset trading, smart contract execution, and investor protection across multiple asset classes.</p>

    <h3>4.1 Core Architecture Principles</h3>
    <p>Penthian’s infrastructure is built on the following core principles:</p>
    <ul>
        <li><strong>Modularity:</strong> Enables plug-and-play integration of new asset types (real estate, SMEs, digital IDs, etc.)</li>
        <li><strong>Interoperability:</strong> Supports cross-chain and ERC-compliant standards (e.g., ERC-3643, ERC-1155)</li>
        <li><strong>Redundancy:</strong> Redundant systems and databases prevent single points of failure</li>
        <li><strong>Security by Design:</strong> Every layer, from smart contracts to hosting, includes embedded security features</li>
        <li><strong>Compliance Embedded:</strong> Technical enforcement of whitelist-based token issuance, wallet verification (Veriff), and investor tiering</li>
    </ul>

    <h3>4.2 Hosting Infrastructure</h3>
    <ul>
        <li>Penthian uses cloud-native infrastructure (AWS/GCP/Azure) with containerized services for scalability</li>
        <li>Kubernetes or Docker orchestrates microservices, ensuring fault tolerance and efficient deployment</li>
        <li>Global Content Delivery Networks (CDNs) and edge caching are used to minimize latency across regions</li>
        <li>Services are regionally distributed to support disaster recovery and data sovereignty</li>
    </ul>

    <h3>4.3 Platform Components</h3>
    <table>
        <tr>
            <th>Component</th>
            <th>Functionality</th>
        </tr>
        <tr>
            <td>Marketplace Layer</td>
            <td>Frontend and backend services for listing, trading, and purchasing tokenized assets</td>
        </tr>
        <tr>
            <td>Smart Contract Layer</td>
            <td>Token standards (ERC-3643/1155), compliance hooks, auction logic, rent distribution</td>
        </tr>
        <tr>
            <td>Wallet Layer</td>
            <td>Self-custody wallet and multi-signature architecture with ERC-4337 compatibility</td>
        </tr>
        <tr>
            <td>Compliance Engine</td>
            <td>Automated checks using KYC/AML via Veriff, investor tiering, address screening</td>
        </tr>
        <tr>
            <td>Admin Dashboard</td>
            <td>Internal control panel for asset listing approval, investor management, and audit logs</td>
        </tr>
        <tr>
            <td>Analytics & Monitoring</td>
            <td>Real-time tracking of transactions, contract interactions, uptime, and system health</td>
        </tr>
    </table>

    <h3>4.4 Third-Party Integrations</h3>
    <ul>
        <li><strong>KYC/AML:</strong> Integrated with Veriff for identity verification, document collection, and investor risk profiles</li>
        <li><strong>Email/SMS:</strong> Integrated with secure providers (e.g., SendGrid, Twilio) for transactional messaging</li>
        <li><strong>Smart Contract Audits:</strong> Contracts are audited before production deployment by certified external firms</li>
        <li><strong>Storage:</strong> Off-chain data (e.g. property titles, shareholder agreements) is stored in encrypted cloud environments (e.g. AWS S3 with KMS)</li>
    </ul>

    <h3>4.5 Tokenization Standards</h3>
    <table>
        <tr>
            <th>Standard</th>
            <th>Use Case</th>
        </tr>
        <tr>
            <td>ERC-1155</td>
            <td>Fractionalized real estate units and business assets</td>
        </tr>
        <tr>
            <td>ERC-721</td>
            <td>Unique asset representation (e.g., NFTs, property IDs)</td>
        </tr>
        <tr>
            <td>ERC-3643</td>
            <td>Regulatory-compliant tokens with whitelisting and transfer restrictions</td>
        </tr>
    </table>

    <h2>5. System Development Life Cycle (SDLC)</h2>
    <p>Penthian enforces a structured and secure SDLC to ensure the quality, security, and compliance of all software and infrastructure deployed on the platform. This process governs all internal code development, smart contract creation, and major third-party integrations.</p>

    <h3>5.1 SDLC Phases</h3>
    <p>Penthian’s development lifecycle follows these key stages:</p>
    <ol>
        <li><strong>Planning & Requirements</strong>
            <ul>
                <li>Business, compliance, and user requirements are gathered</li>
                <li>Risk assessments are performed for any regulatory, security, or architectural concerns</li>
            </ul>
        </li>
        <li><strong>Design</strong>
            <ul>
                <li>Technical specifications are created and reviewed by senior engineers and compliance</li>
                <li>Smart contract logic and token behavior are mapped to ensure compliance (e.g. transfer restrictions, vesting)</li>
                <li>Data models and API interfaces are designed with minimal exposure and privacy in mind</li>
            </ul>
        </li>
        <li><strong>Development</strong>
            <ul>
                <li>Code is written in secure, version-controlled repositories (e.g., GitHub, GitLab)</li>
                <li>Developers follow secure coding standards (OWASP, MITRE ATT&CK)</li>
                <li>Key features (wallet, KYC, asset tokenization) are modularized and independently testable</li>
            </ul>
        </li>
        <li><strong>Testing</strong>
            <ul>
                <li>Unit tests, integration tests, and regression tests are run automatically via CI/CD pipelines</li>
                <li>Smart contracts undergo gas profiling, fuzz testing, and formal verification where possible</li>
                <li>Testing environments replicate production infrastructure for reliable pre-launch evaluations</li>
            </ul>
        </li>
        <li><strong>Audit & Review</strong>
            <ul>
                <li>Critical smart contracts and backend modules are reviewed and approved by senior developers and third-party auditors</li>
                <li>Code changes go through pull request review and automated quality checks</li>
            </ul>
        </li>
        <li><strong>Deployment</strong>
            <ul>
                <li>Production deployments are executed through controlled pipelines with approval gates</li>
                <li>Rollbacks and canary releases are prepared for rapid remediation in case of unexpected issues</li>
                <li>Infrastructure-as-code (IaC) ensures consistency across environments</li>
            </ul>
        </li>
        <li><strong>Monitoring & Maintenance</strong>
            <ul>
                <li>Post-deployment monitoring includes error logging, real-time alerts, and performance metrics</li>
                <li>Maintenance windows and hotfix procedures are pre-approved by CTO and DevOps</li>
                <li>Vulnerabilities discovered post-release are triaged and patched under the Incident Response Plan</li>
            </ul>
        </li>
    </ol>

    <h3>5.2 Developer Access Control</h3>
    <ul>
        <li>Developers are assigned least privilege access to environments and systems</li>
        <li>Production access requires MFA and senior authorization</li>
        <li>Access logs are reviewed quarterly by the CISO and internal audit function</li>
    </ul>

    <h3>5.3 Change Management</h3>
    <ul>
        <li>All changes to production systems follow a Change Request Procedure</li>
        <li>Documentation of changes, justifications, test results, and rollback plans is mandatory</li>
        <li>Significant architectural or smart contract updates require approval by the CTO and Compliance Officer</li>
    </ul>

    <h2>6. Data Governance & Protection</h2>
    <p>Penthian enforces strong data governance principles to protect client information, maintain platform integrity, and comply with data protection regulations in Mauritius, the EU, and globally.</p>

    <h3>6.1 Data Classification</h3>
    <p>All data is classified into four categories to determine appropriate protection levels:</p>
    <table>
        <tr>
            <th>Classification</th>
            <th>Examples</th>
        </tr>
        <tr>
            <td>Confidential</td>
            <td>Wallet private keys, user seed phrases, admin credentials</td>
        </tr>
        <tr>
            <td>Sensitive</td>
            <td>KYC documents, passport scans, financial records, compliance notes</td>
        </tr>
        <tr>
            <td>Internal</td>
            <td>Platform analytics, access logs, audit trails, code repositories</td>
        </tr>
        <tr>
            <td>Public</td>
            <td>Marketing content, educational resources, public blockchain data</td>
        </tr>
    </table>
    <p>Confidential and sensitive data are encrypted in transit and at rest.</p>

    <h3>6.2 Data Storage & Encryption</h3>
    <ul>
        <li>All sensitive and confidential data is stored using AES-256 encryption at rest</li>
        <li>In-transit data is protected via TLS 1.3+</li>
        <li>Secrets, environment variables, and credentials are managed through secure vaults (e.g., HashiCorp Vault, AWS Secrets Manager)</li>
        <li>Smart contracts avoid storing sensitive data on-chain; references (e.g., hashes) are used instead</li>
    </ul>

    <h3>6.3 Access Management</h3>
    <ul>
        <li>Access to data is governed by the Principle of Least Privilege (PoLP)</li>
        <li>Multi-factor authentication (MFA) is required for admin dashboards and developer systems</li>
        <li>Role-Based Access Control (RBAC) is enforced for sensitive platforms</li>
        <li>Data access requests and approvals are logged and reviewed quarterly</li>
    </ul>

    <h3>6.4 User Data & Privacy</h3>
    <ul>
        <li>Users have access to view, export, and delete their personal information in compliance with GDPR</li>
        <li>A privacy policy is maintained and disclosed on the Penthian platform</li>
        <li>All vendors handling user data (e.g., Veriff) operate under signed Data Processing Agreements (DPAs)</li>
    </ul>

    <h3>6.5 Data Retention & Destruction</h3>
    <ul>
        <li>KYC/AML data is retained for a minimum of 7 years, per regulatory requirements</li>
        <li>Transaction logs and wallet interactions are stored indefinitely for auditability</li>
        <li>Upon user exit or contract termination, data is securely deleted using industry-approved wipe protocols</li>
        <li>Redundant data is reviewed quarterly and destroyed when no longer needed</li>
    </ul>

    <h3>6.6 Backup & Recovery</h3>
    <ul>
        <li>Encrypted backups are taken daily and stored in separate availability zones</li>
        <li>Full recovery tests are conducted at least twice per year</li>
        <li>A documented Disaster Recovery Plan (DRP) outlines recovery steps for data centers, cloud resources, and platform services</li>
    </ul>

    <h2>7. Smart Contract Governance & On-Chain Compliance</h2>
    <p>As a regulated Virtual Asset Marketplace, Penthian enforces rigorous governance over its smart contract development, deployment, and update process. All on-chain activity must remain secure, auditable, and aligned with regulatory obligations such as the FSC Mauritius and FATF travel rule standards.</p>

    <h3>7.1 Token Standards and Compliance Integration</h3>
    <p>Penthian uses the following Ethereum-based standards:</p>
    <table>
        <tr>
            <th>Standard</th>
            <th>Use Case</th>
        </tr>
        <tr>
            <td>ERC-1155</td>
            <td>Multi-token standard for fractional assets and real-world token bundles</td>
        </tr>
        <tr>
            <td>ERC-721</td>
            <td>Unique non-fungible assets (property IDs, asset certificates)</td>
        </tr>
        <tr>
            <td>ERC-3643</td>
            <td>Identity-bound, compliance-enforced tokens (whitelist-only transfers)</td>
        </tr>
    </table>
    <p>ERC-3643 ensures investor onboarding is KYC-verified and transfer permissions are dynamically enforced via smart contract checks.</p>

    <h3>7.2 Development & Audit Process</h3>
    <ul>
        <li>Smart contracts are developed internally using secure design patterns (e.g., OpenZeppelin libraries)</li>
        <li>All production contracts are externally audited by qualified firms and reports are made available to regulators on request</li>
        <li>Audit trails include code diffs, test results, and deployment hashes</li>
        <li>Penthian may utilize bug bounty programs as part of its security program</li>
    </ul>

    <h3>7.3 Whitelisting & Transfer Controls</h3>
    <ul>
        <li>Transfers of regulated tokens (e.g., real estate-backed) are restricted to whitelisted addresses</li>
        <li>The whitelist is managed dynamically via the compliance backend integrated with Veriff KYC</li>
        <li>Transfers involving blacklisted wallets or jurisdictions are automatically blocked</li>
    </ul>

    <h3>7.4 Upgradeability & Governance</h3>
    <ul>
        <li>Contracts are either:</li>
        <ul>
            <li>Immutable with clearly defined expiration logic (e.g., project-specific tokens), or</li>
            <li>Upgradeable via a proxy pattern controlled by multi-signature governance</li>
        </ul>
        <li>All upgrades must:</li>
        <ul>
            <li>Be pre-audited</li>
            <li>Approved by the internal compliance committee</li>
            <li>Announced in advance on the platform’s governance channel or website</li>
            <li>Have rollback capability if critical failures are detected</li>
        </ul>
    </ul>

    <h3>7.5 On-Chain KYC/AML Enforcement</h3>
    <ul>
        <li>Identity proofs are hashed and stored off-chain, linked to smart contracts using soulbound attributes or token permissions</li>
        <li>Transfers are checked against KYC tiers and risk flags before approval</li>
        <li>Compliance logs (e.g., denied transactions, investor flags) are stored off-chain and synced to the admin panel for review</li>
    </ul>

    <h3>7.6 Transparency & User Protection</h3>
    <ul>
        <li>All smart contracts are verified and published on block explorers (e.g., Etherscan)</li>
        <li>Critical contract addresses are pinned on Penthian’s website and documentation</li>
        <li>Token metadata includes legal disclosures, asset links, ownership rules, and expiration logic</li>
        <li>Investors are provided with a “How It Works” explainer for each token contract</li>
    </ul>

    <h2>8. Incident Response & Disaster Recovery</h2>
    <p>Penthian maintains a formal Incident Response Plan (IRP) and Disaster Recovery Plan (DRP) to quickly detect, respond to, and recover from technology failures, security breaches, or catastrophic events that may impact client assets, data, or operations.</p>

    <h3>8.1 Incident Response Plan (IRP)</h3>
    <p>The IRP ensures that all high-risk incidents (e.g., wallet compromise, token manipulation, system outage) are managed with speed, structure, and transparency.</p>
    <p><strong>Key Elements:</strong></p>
    <ul>
        <li><strong>24/7 Monitoring:</strong> Security Information & Event Management (SIEM) tools continuously monitor logs, events, and API activity</li>
        <li><strong>Classification:</strong> Incidents are categorized (Critical, High, Medium, Low) based on risk impact</li>
        <li><strong>Response Team:</strong> Composed of CTO, CISO, Compliance Officer, and external advisors</li>
        <li><strong>Response Timeline:</strong></li>
        <ul>
            <li>T+0h: Detect and classify</li>
            <li>T+2h: Contain breach</li>
            <li>T+4h: Begin remediation</li>
            <li>T+24h: Postmortem initiated</li>
        </ul>
        <li><strong>Communications:</strong></li>
        <ul>
            <li>Internal alerts via Slack, PagerDuty, or SMS</li>
            <li>Public disclosures posted if client assets or data are impacted</li>
            <li>FSC notified within 72 hours of any material breach (as per VASP requirements)</li>
        </ul>
    </ul>

    <h3>8.2 Disaster Recovery Plan (DRP)</h3>
    <p>The DRP governs how Penthian recovers operations after a critical failure affecting infrastructure or data.</p>
    <p><strong>Recovery Goals:</strong></p>
    <table>
        <tr>
            <th>Metric</th>
            <th>Target</th>
        </tr>
        <tr>
            <td>RTO (Recovery Time)</td>
            <td>≤ 6 hours</td>
        </tr>
        <tr>
            <td>RPO (Recovery Point)</td>
            <td>≤ 15 minutes of data loss</td>
        </tr>
    </table>
    <p><strong>DRP Components:</strong></p>
    <ul>
        <li>Daily Backups of all critical systems and databases stored in geo-redundant environments</li>
        <li>Failover Architecture: Multi-region deployments with load balancers and active-passive node setups</li>
        <li>Cloud Infrastructure Scripts: IaC templates (e.g., Terraform) enable rapid restoration</li>
        <li>Tabletop Drills: DRP tests conducted semi-annually with simulated failure scenarios</li>
        <li>Escalation Matrix: Clear contact tree across infrastructure, compliance, and legal teams</li>
        <li>Post-Recovery Audit: After-action reports document root causes and corrective measures</li>
    </ul>

    <h3>8.3 Business Continuity Integration</h3>
    <ul>
        <li>DRP integrates with the Business Continuity Plan (BCP) to cover:</li>
        <ul>
            <li>Communication continuity</li>
            <li>Remote work procedures</li>
            <li>Vendor service restoration</li>
            <li>Key staff succession</li>
        </ul>
    </ul>

    <h2>9. Technology Risk Management</h2>
    <p>Penthian’s risk management approach ensures that all technical systems, vendors, and development practices are evaluated for risks that could compromise platform integrity, regulatory compliance, or user safety.</p>

    <h3>9.1 Risk Categories Monitored</h3>
    <table>
        <tr>
            <th>Risk Type</th>
            <th>Examples</th>
        </tr>
        <tr>
            <td>Cybersecurity</td>
            <td>Phishing, DDoS, smart contract vulnerabilities, credential leaks</td>
        </tr>
        <tr>
            <td>Infrastructure</td>
            <td>Server outages, network latency, failed deployments</td>
        </tr>
        <tr>
            <td>Compliance</td>
            <td>Failure to enforce KYC/AML, non-compliant token issuance</td>
        </tr>
        <tr>
            <td>Data Protection</td>
            <td>Improper encryption, unauthorized access, data breach</td>
        </tr>
        <tr>
            <td>Third-Party Dependency</td>
            <td>KYC vendor failure, cloud outages, failed audit reports</td>
        </tr>
        <tr>
            <td>Technology Obsolescence</td>
            <td>Unsupported frameworks, legacy tools, outdated libraries</td>
        </tr>
    </table>

    <h3>9.2 Risk Management Lifecycle</h3>
    <p>Penthian applies the following lifecycle to all tech-related risks:</p>
    <ol>
        <li><strong>Identification</strong>
            <ul>
                <li>Risks are logged during audits, incident reviews, and code reviews</li>
                <li>Staff are trained to escalate technical anomalies</li>
            </ul>
        </li>
        <li><strong>Assessment</strong>
            <ul>
                <li>Each risk is scored using a matrix (Likelihood × Impact)</li>
                <li>Regulatory, reputational, and financial exposure are factored in</li>
            </ul>
        </li>
        <li><strong>Mitigation</strong>
            <ul>
                <li>Controls are implemented (patching, vendor replacement, system hardening)</li>
                <li>Residual risk must fall below an internal threshold to remain operational</li>
            </ul>
        </li>
        <li><strong>Monitoring</strong>
            <ul>
                <li>Real-time alerts and dashboards track key infrastructure indicators</li>
                <li>Recurring reports are generated for management and compliance</li>
            </ul>
        </li>
        <li><strong>Reporting & Review</strong>
            <ul>
                <li>Material risks are included in quarterly board updates</li>
                <li>Annual reviews assess the relevance of all risk controls and thresholds</li>
            </ul>
        </li>
    </ol>

    <h3>9.3 Tools & Practices</h3>
    <ul>
        <li><strong>SIEM Tools:</strong> Real-time log aggregation and alerting (e.g., Datadog, Splunk)</li>
        <li><strong>Automated Code Scanning:</strong> Every pull request scanned for known vulnerabilities (e.g., Snyk)</li>
        <li><strong>Penetration Testing:</strong> Annual external tests, with ad hoc tests for major releases</li>
        <li><strong>Vendor Risk Assessments:</strong> All new vendors undergo review before onboarding</li>
        <li><strong>Technology Risk Register:</strong> Maintained by the Compliance Officer and reviewed quarterly</li>
    </ul>

    <h3>9.4 Escalation & Governance</h3>
    <ul>
        <li>Any Critical or High severity risk must be:</li>
        <ul>
            <li>Documented</li>
            <li>Assigned an owner</li>
            <li>Reported to the Board within 48 hours</li>
            <li>Tracked in the Technology Risk Register until closure</li>
        </ul>
    </ul>

    <h2>10. Compliance Monitoring & Auditability</h2>
    <p>Penthian’s technology systems are designed to support proactive regulatory compliance and continuous audit readiness. The platform integrates automated controls, audit logs, and real-time oversight mechanisms to ensure ongoing adherence to FSC Mauritius, FATF, and MiCA regulatory standards.</p>

    <h3>10.1 Continuous Compliance Monitoring</h3>
    <p>Penthian enforces real-time compliance checks across key operations:</p>
    <ul>
        <li><strong>KYC Verification</strong>
            <ul>
                <li>Every user is screened through Veriff before wallet activation or asset purchase</li>
                <li>Risk flags (e.g., PEPs, sanctions) are monitored continuously</li>
            </ul>
        </li>
        <li><strong>On-Chain Transfer Controls</strong>
            <ul>
                <li>Transfers of ERC-3643 tokens are restricted to verified wallets only</li>
                <li>Smart contracts log all token movements for auditability</li>
            </ul>
        </li>
        <li><strong>Investor Tiering</strong>
            <ul>
                <li>Users are categorized based on risk profile, investment limits, and residency</li>
                <li>Tier logic is embedded in compliance engine and tied to asset access permissions</li>
            </ul>
        </li>
        <li><strong>Asset Listings</strong>
            <ul>
                <li>Listings undergo automated checks for legal structure, documentation, and ownership rights</li>
                <li>Admin approvals are logged and reviewed quarterly</li>
            </ul>
        </li>
    </ul>

    <h3>10.2 Audit Trails & Evidence Management</h3>
    <ul>
        <li><strong>Immutable Logs:</strong> All administrative actions (e.g., whitelisting, contract deployment, listings) are timestamped and recorded</li>
        <li><strong>Event Tracking:</strong> System-level actions, including login attempts, asset transfers, and wallet activity, are logged with metadata</li>
        <li><strong>Off-Chain Storage:</strong> Audit records are retained for a minimum of 7 years and stored in encrypted cloud databases</li>
        <li><strong>Regulator Access:</strong> On request, FSC can be provided with structured audit extracts within 72 hours</li>
    </ul>

    <h3>10.3 Compliance Dashboard</h3>
    <ul>
        <li>Internal compliance portal aggregates:</li>
        <ul>
            <li>KYC verification status</li>
            <li>Token compliance (restricted vs. unrestricted)</li>
            <li>Investor risk scores</li>
            <li>Audit log downloads</li>
            <li>Issue tracker for non-compliant accounts or listings</li>
        </ul>
    </ul>

    <h3>10.4 Annual Reviews & External Audits</h3>
    <ul>
        <li>An annual compliance review is conducted, covering:</li>
        <ul>
            <li>Technology policy enforcement</li>
            <li>Smart contract governance</li>
            <li>User protection controls</li>
            <li>Business continuity tests</li>
        </ul>
        <li>Independent auditors may be appointed to:</li>
        <ul>
            <li>Review key systems for regulatory alignment</li>
            <li>Certify data handling, transaction integrity, and audit procedures</li>
        </ul>
    </ul>

    <h3>10.5 Breach Handling</h3>
    <ul>
        <li>Any breach of token compliance or user KYC/KYB protocol:</li>
        <ul>
            <li>Is escalated to the Board and Compliance Officer</li>
            <li>Reported to FSC as per the Virtual Asset and Initial Token Offering Services Act (VAITOS)</li>
            <li>Triggers a root cause analysis and remediation plan within 7 days</li>
        </ul>
    </ul>
            </div>
    
           <?php include '../src/footer.php'; ?>
          </div>
        </div>
      </div>
    </section>
    <div class="search-modal">
      <form action="/search" class="search-form w-form">
        <input class="form-input w-input" maxlength="256" name="query" placeholder="Search…" type="search" id="search" required="" />
        <input type="submit" class="button button-search-modal w-button" value="Search" />
      </form>
      <img src="https://cdn.prod.website-files.com/65f1bda3afbf12c329f9dfa2/661e359cba5b0235e64f505e_icon__x.svg" loading="eager" data-w-id="704091e1-2c4f-3615-a457-13ae63219e21" alt="Close Modal" class="search-modal-close-button" />
    </div>
    <div class="reading-progress-indicator">
      <div class="reading-progress-indicator-inner"></div>
    </div>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=65f1bda3afbf12c329f9dfa2" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="../script.js" type="text/javascript"></script>
  </body>
</html>
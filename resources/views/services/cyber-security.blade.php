@extends('layout')
@section('title','Cyber Security')
@section('content')

<!-- BREADCRUMB STARTS HERE -->
<div class="rv-breadcrumb pt-120 pb-120">
    <div class="container">
        <h1 class="rv-breadcrumb__title">Cyber Security</h1>

        <ul class="rv-breadcrumb__nav d-flex justify-content-center">
            <li><a href="{{ route('service') }}"><i class="fa-solid fa-sharp fa-home"></i> Service</a></li>
            <li class="current-page"><span class="dvdr"> &#47;</span><span>Cyber Security</span></li>
        </ul>
    </div>
</div>
<!-- BREADCRUMB ENDS HERE -->

{{-- SERVICE SECTION STARTS --}}
<div class="rv-34-service mt-120 " >
    <div class="container">
        <div class="row">
            <div class="rv-34-section-heading text-center mb-35">
                <span class="rv-34-tag"><h4 class="mb-0">GOVERNANCE, RISK, AND COMPLIANCE (GRC)</h4></span>
             </div>
        </div>
    </div>
</div>

<section class="rv-31-about mt-120">
    <div class="container">
        <div class="row">
            <div class="rv-31-abt-info-1">
                <div class="row">
                    <div class="col-lg-6 m-0 p-0 ">
                        <div class="rv-31-abt-info-1__img w_img">
                            <img src="{{ asset('assets/img/risk-management-animate.svg') }}" class="wow slideInLeft"
                                alt="about">
                        </div>
                    </div>
                    <div class="col-lg-6 m-0 p-0 ">
                        <div class="rv-31-abt-info-1-content">
                            <div class="rv-31-abt-info-1__item wow fadeInUp">
                                <div class="rv-31-abt-info-1__item-icon ">
                                    <img src="{{ asset('assets/img/Software/about/rv-31-abt-1.png') }}" alt="icon">
                                </div>
                                <div class="rv-31-abt-info-1__item-text">
                                    <h6>Regulatory Compliance Management</h6>
                                    <p >Ensure your business meets regulatory requirements like ISO 27001, PCI DSS, GDPR, and HIPAA.</p>
                                </div>
                            </div>
                            <div class="rv-31-abt-info-1__item wow fadeInUp" data-wow-delay="0.3s">
                                <div class="rv-31-abt-info-1__item-icon ">
                                    <img src="{{ asset('assets/img/Software/about/rv-31-abt-2.png') }}" alt="icon">
                                </div>
                                <div class="rv-31-abt-info-1__item-text">
                                    <h6>Policy & Control Development</h6>
                                    <p>Design policies and controls that align with business objectives and minimize exposure.</p>
                                </div>
                            </div>
                            <div class="rv-31-abt-info-1__item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="rv-31-abt-info-1__item-icon ">
                                    <img src="{{ asset('assets/img/Software/about/rv-31-abt-3.png') }}" alt="icon">
                                </div>
                                <div class="rv-31-abt-info-1__item-text">
                                    <h6>Risk Management Solutions</h6>
                                    <p>Identify, assess, and mitigate risks with tailored risk management frameworks.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-120 mb-120 rv-31-abt-2">
            <div class="col-lg-6 m-0 p-0 ">
                <div class="rv-31-abt-info-2">
                    <div class="rv-section-heading mb-40">
                        <h2 class="rv-31-sec-title">Comprehensive GRC Services</h2>
                        <span class="rv-31-sec-subtitle" >We offer Governance, Risk, and Compliance (GRC) services designed to help businesses maintain regulatory compliance and reduce risk exposure.</span>
                    </div>
                    <div class="rv-31-abt-info-1__item abt-info-2__item wow fadeInUp">
                        <div class="rv-31-abt-info-1__item-text abt-info-2__text">

                            <p >Our solutions ensure your organization aligns with key regulations, such as ISO 27001, PCI DSS, GDPR, and HIPAA, while streamlining your risk management processes.
                                We work with you to develop policies, controls, and compliance strategies that not only meet legal requirements but also enhance operational efficiency.
                                 By integrating our GRC services, you reduce your legal and financial risks while establishing a solid framework for sustained growth and compliance.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-0 p-0 ">
                <div class="rv-31-abt-info-1__img w_img">
                    <img src="{{ asset('assets/img/certification-animate.svg') }}" class="wow slideInRight"
                        alt="about">
                </div>
            </div>
        </div>
    </div>
</section>

<div class="rv-34-service mt-120 " >
    <div class="container">
        <div class="row">
            <div class="rv-34-section-heading text-center mb-35">
                <span class="rv-34-tag" ><h4 class="mb-0">SECURITY OPERATIONS CENTER (SOC)</h4></span>
             </div>
        </div>
    </div>
</div>

<section class="rv-31-about mt-120">
    <div class="container">
        <div class="row">
            <div class="rv-31-abt-info-1">
                <div class="row">
                    <div class="col-lg-6 m-0 p-0 ">
                        <div class="rv-31-abt-info-1__img w_img">
                            <img src="{{ asset('assets/img/security-on-animate.svg') }}" class="wow slideInLeft"
                                alt="about">
                        </div>
                    </div>
                    <div class="col-lg-6 m-0 p-0 ">
                        <div class="rv-31-abt-info-1-content">
                            <div class="rv-31-abt-info-1__item wow fadeInUp">
                                <div class="rv-31-abt-info-1__item-icon ">
                                    <img src="{{ asset('assets/img/Software/about/rv-31-abt-1.png') }}" alt="icon">
                                </div>
                                <div class="rv-31-abt-info-1__item-text">
                                    <h6>24/7 Real-Time Monitoring</h6>
                                    <p>Constantly monitor your network to detect and respond to cybersecurity threats in real-time.</p></div>
                            </div>
                            <div class="rv-31-abt-info-1__item wow fadeInUp" data-wow-delay="0.3s">
                                <div class="rv-31-abt-info-1__item-icon ">
                                    <img src="{{ asset('assets/img/Software/about/rv-31-abt-2.png') }}" alt="icon">
                                </div>
                                <div class="rv-31-abt-info-1__item-text">
                                    <h6>Threat Detection & Incident Response</h6>
                                    <p>Identify anomalies and respond to security incidents swiftly and effectively.</p>
                                </div>
                            </div>
                            <div class="rv-31-abt-info-1__item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="rv-31-abt-info-1__item-icon ">
                                    <img src="{{ asset('assets/img/Software/about/rv-31-abt-3.png') }}" alt="icon">
                                </div>
                                <div class="rv-31-abt-info-1__item-text">
                                    <h6>Proactive Threat Hunting</h6>
                                    <p>Stay ahead of cyber threats through continuous proactive threat analysis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-120 mb-120 rv-31-abt-2">
            <div class="col-lg-6 m-0 p-0 ">
                <div class="rv-31-abt-info-2">
                    <div class="rv-section-heading mb-40">
                        <h2 class="rv-31-sec-title">Comprehensive SOC Solutions</h2>
                        <span class="rv-31-sec-subtitle" >Our Security Operations Center (SOC) services, delivering 24/7 real-time monitoring to safeguard your business from evolving cyber threats.
                        </span>
                    </div>
                    <div class="rv-31-abt-info-1__item abt-info-2__item wow fadeInUp">
                        <div class="rv-31-abt-info-1__item-text abt-info-2__text">
                            <p >Using advanced technologies and threat intelligence, we detect and respond to potential security breaches before they impact your operations.
                                Our SOC team works closely with your IT staff to integrate a seamless threat detection and incident response framework, ensuring rapid response to emerging threats.
                                By continuously engaging in proactive threat hunting, we strengthen your organization's defenses, keeping your network secure from the latest cyber risks.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-0 p-0 ">
                <div class="rv-31-abt-info-1__img w_img">
                    <img src="{{ asset('assets/img/endpoint-animate.svg') }}" class="wow slideInRight"
                        alt="about">
                </div>
            </div>
        </div>
    </div>
</section>



<div class="rv-34-service mt-120 " >
    <div class="container">
        <div class="row">
            <div class="rv-34-section-heading text-center mb-35">
                <span class="rv-34-tag" ><h4 class="mb-0">PENETRATION TESTING</h4></span>
             </div>
        </div>
    </div>
</div>
<section class="rv-31-about mt-120">
    <div class="container">
        <div class="row">
            <div class="rv-31-abt-info-1">
                <div class="row">
                    <div class="col-lg-6 m-0 p-0 ">
                        <div class="rv-31-abt-info-1__img w_img">
                            <img src="{{ asset('assets/img/pt1.svg') }}" class="wow slideInLeft"
                                alt="about">
                        </div>
                    </div>
                    <div class="col-lg-6 m-0 p-0 ">
                        <div class="rv-31-abt-info-1-content">
                            <div class="rv-31-abt-info-1__item wow fadeInUp">
                                <div class="rv-31-abt-info-1__item-icon ">
                                    <img src="{{ asset('assets/img/Software/about/rv-31-abt-1.png') }}" alt="icon">
                                </div>
                                <div class="rv-31-abt-info-1__item-text">
                                    <h6>Network Vulnerability Assessment</h6>
                                    <p>Identify weak points in your network and infrastructure before attackers can exploit them.</p>
                                </div>
                            </div>
                            <div class="rv-31-abt-info-1__item wow fadeInUp" data-wow-delay="0.3s">
                                <div class="rv-31-abt-info-1__item-icon ">
                                    <img src="{{ asset('assets/img/Software/about/rv-31-abt-2.png') }}" alt="icon">
                                </div>
                                <div class="rv-31-abt-info-1__item-text">
                                    <h6>Real-World Attack Simulations</h6>
                                    <p>Simulate real-world cyberattacks to test your security posture against advanced threats.</p>
                                </div>
                            </div>
                            <div class="rv-31-abt-info-1__item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="rv-31-abt-info-1__item-icon ">
                                    <img src="{{ asset('assets/img/Software/about/rv-31-abt-3.png') }}" alt="icon">
                                </div>
                                <div class="rv-31-abt-info-1__item-text">
                                    <h6>Detailed Reporting & Remediation</h6>
                                    <p>Receive in-depth reports and actionable steps to remediate discovered vulnerabilities.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-120 mb-120 rv-31-abt-2">
            <div class="col-lg-6 m-0 p-0 ">
                <div class="rv-31-abt-info-2">
                    <div class="rv-section-heading mb-40">
                        <h2 class="rv-31-sec-title">Advanced Penetration Testing Services</h2>

                    </div>
                    <div class="rv-31-abt-info-1__item abt-info-2__item wow fadeInUp">
                        <div class="rv-31-abt-info-1__item-text abt-info-2__text">
                            <p >Our Penetration Testing services are designed to assess and improve your security by simulating real-world cyberattacks. Our certified ethical hackers perform thorough network vulnerability assessments to uncover weak points across your infrastructure, applications, and network. After testing, we provide a detailed report outlining vulnerabilities along with actionable remediation strategies to strengthen your security posture. By proactively identifying and addressing security gaps, we help your organization prevent unauthorized access and data breaches, ensuring a robust defense against potential threats.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-0 p-0 ">
                <div class="rv-31-abt-info-1__img w_img">
                    <img src="{{ asset('assets/img/pt2.svg') }}" class="wow slideInRight"
                        alt="about">
                </div>
            </div>
        </div>
    </div>
</section>
{{-- SERVICE SECTION END --}}

@endsection

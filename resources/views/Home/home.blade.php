@extends('Home.Layout.main')

@section('title', 'Home Page')
@section('description', 'Welcome to Madhav Jha\'s Portfolio')

@section('content')
    @include('Home.Layout.slider')
    @include('Home.Layout.resources')


    <section id="about" class="tf-section2 flat-about home2">
        <div class="themes-container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="wrap-about flex">
                        <div class="heading">
                            <div class="heading-section">
                                <h5>About Us</h5>
                                <h2>I’m Madhav Jha </h2>
                                <p class="p-18">Hi there! I am Madhav! You can also know me as PHP-Mysql & React.JS Developer. I've been coding for over 4 year now. As a Full Stack Web Developer. I've worked with freelancing groups to help build web apps & helped small businesses scale their companies worldwide. I deliver Real Vaue by building large scale projects to help companies scale their business with my problem solving skills through web technologies. </p>
                            </div>
                            <div class="sc-btn-about ">
                                <a href="#" class="btn-action btn-style "><span>Book a free counseling session </span></a>
                            </div>
                        </div>

                        <div class="image">
                            <img src="{{ asset('assets/images/me/about.jpg') }}" alt="" style="width: 442px;">
                        </div>
                        <div class="wrap-icon">
                            <div class="box">
                                <div class="heading-section">
                                    <h5>TECHNICAL SKILLS</h5>
                                </div>
                                <table>
                                    <tr class="p-18">
                                        <th ><h4><a href="#">Coding Languages</a> </h4></th>
                                        <th>
                                            <li style="color: #6001D3;"><i class="fa fa-code"></i> PHP</li>
                                            <li  style="color: #6001D3;"><i class="fa fa-code"></i> JavaScript</li>
                                            <li  style="color: #6001D3;"><i class="fa fa-code"></i> Ruby</li>
                                        </th>
                                    </tr>
                                    <tr class="p-18">
                                        <th ><h4><a href="#">Web Technologies:</a> </h4></th>
                                        <th>
                                            <li  style="color: #6001D3;"><i class="fa fa-code"></i> HTML</li>
                                            <li  style="color: #6001D3;"><i class="fa fa-code"></i> CSS</li>
                                            <li  style="color: #6001D3;"><i class="fa fa-code"></i> React Js</li>
                                            <li  style="color: #6001D3;"><i class="fa fa-code"></i> Node Js</li>
                                            <li  style="color: #6001D3;"><i class="fa fa-code"></i> JQuery </li>
                                            <li  style="color: #6001D3;"><i class="fa fa-code"></i> AJAX</li>

                                        </th>
                                    </tr>

                                    <tr class="p-18">
                                        <th ><h4><a href="#">Frameworks</a> </h4></th>
                                        <th>
                                            <li  style="color: #6001D3;"><i class="fa fa-code"></i> Bootstrap</li>
                                            <li  style="color: #6001D3;"><i class="fa fa-code"></i> Material UI</li>
                                            <li  style="color: #6001D3;"><i class="fa fa-code"></i> Laravel</li>
                                            <li  style="color: #6001D3;"><i class="fa fa-code"></i> Angular</li>
                                        </th>
                                    </tr>

                                    <tr class="p-18">
                                        <th ><h4><a href="#">DataBase</a> </h4></th>
                                        <th>
                                            <li  style="color: #6001D3;"><i class="fa fa-database"></i> MySQL</li>
                                            <li  style="color: #6001D3;"><i class="fa fa-database"></i> NoSQL</li>

                                        </th>
                                    </tr>
                                    <tr class="p-18">
                                        <th ><h4><a href="#">Miscellaneous</a> </h4></th>
                                        <th>
                                            <li  style="color: #6001D3;"><i class="fa fa-code"></i> GIT & GITHUB</li>
                                            <li  style="color: #6001D3;"><i class="fa fa-code"></i> Cloud Hosting</li>
                                            <li  style="color: #6001D3;"><i class="fa fa-code"></i> WordPress</li>
                                        </th>
                                    </tr>
                                </table>
                            </div>




                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- flat process -->
    <section class="flat-process tf-section">
        <div class="themes-container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="heading-section">
                        <h5>How to</h5>
                        <h2>Become a Full Stack Developer </h2>
                        <p class="p-18 text-color-4">To become a full stack developer, you’ll need to familiarize yourself with two basic web development concepts: the front end and the back end.</p>
                    </div>
                    <div class="sc-btn-process ">
                        <a href="https://madhavjha.in/mobile-app/" class="btn-action btn-style "><span>Schedule 1:1 free counselling
                                </span></a>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="wrap-process">
                        <div class="bg-process">
                            <svg width="1381" height="527" viewBox="0 0 1381 527" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 414.812C3 414.812 265.643 601.371 373.971 486.467C482.299 371.562 533.475 316.422 699.57 332.238C865.666 348.055 894.667 371.787 1088.44 142.414C1214.79 -7.13477 1247.3 7.18164 1377.62 2.56055" stroke="#6001D3" stroke-width="5" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div class="box-process flex">
                            <div class="process style-1">
                                <div class="icon-user">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.0003 20C24.6027 20 28.3337 16.2691 28.3337 11.6667C28.3337 7.06434 24.6027 3.33337 20.0003 3.33337C15.398 3.33337 11.667 7.06434 11.667 11.6667C11.667 16.2691 15.398 20 20.0003 20Z" fill="#6001D3"/>
                                        <path d="M19.9996 24.1666C11.6496 24.1666 4.84961 29.7666 4.84961 36.6666C4.84961 37.1333 5.21628 37.5 5.68294 37.5H34.3163C34.7829 37.5 35.1496 37.1333 35.1496 36.6666C35.1496 29.7666 28.3496 24.1666 19.9996 24.1666Z" fill="#6001D3"/>
                                    </svg>
                                </div>
                                <h3><a href="#">Required Skills</a> </h3>
                                <p><u><a href="https://eduladdr.com">Eduladdr Full Stack Developer certification to Learn From Scratch </a></u> </p>
                                <div class="mark-number"><svg width="89" height="217" viewBox="0 0 89 217" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.5" d="M67.9541 217C62.1896 217 57.4546 215.199 53.7489 211.596C50.0432 207.993 48.1903 203.515 48.1903 198.163V42.5232L52.5136 49.3169L29.0442 63.5221C25.9561 65.375 22.6621 66.3014 19.1623 66.3014C13.8096 66.3014 9.38337 64.2942 5.88354 60.2796C2.3837 56.2651 0.633789 51.9933 0.633789 47.4641C0.633789 40.4644 3.82481 35.1118 10.2069 31.406L56.837 3.61327C60.3368 1.76042 64.763 0.833984 70.1157 0.833984C75.4684 0.833984 79.8432 2.63538 83.2401 6.23816C86.637 9.84093 88.3354 14.3186 88.3354 19.6713V198.163C88.3354 203.515 86.4311 207.993 82.6225 211.596C78.8138 215.199 73.9244 217 67.9541 217Z" fill="url(#paint0_linear_2080_4630)"/>
                                        <defs>
                                            <linearGradient id="paint0_linear_2080_4630" x1="-7.34993" y1="0.833941" x2="-7.35014" y2="256.356" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#ABAFC7"/>
                                                <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <div class="process style-2">
                                <div class="icon-user">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.9996 25C11.6496 25 4.84961 30.6 4.84961 37.5C4.84961 37.9667 5.21628 38.3333 5.68294 38.3333H34.3163C34.7829 38.3333 35.1496 37.9667 35.1496 37.5C35.1496 30.6 28.3496 25 19.9996 25Z" fill="#6001D3"/>
                                        <path d="M26.1837 6.10004C24.6837 4.40004 22.4503 3.33337 20.0003 3.33337C17.667 3.33337 15.5337 4.28337 14.017 5.85004C12.567 7.35004 11.667 9.41671 11.667 11.6667C11.667 13.2334 12.1003 14.7 12.8837 15.95C13.3003 16.6667 13.8337 17.3167 14.467 17.85C15.917 19.1834 17.8503 20 20.0003 20C23.0503 20 25.6837 18.3667 27.1337 15.95C27.567 15.2334 27.9003 14.4334 28.0837 13.6C28.2503 12.9834 28.3337 12.3334 28.3337 11.6667C28.3337 9.53337 27.517 7.58337 26.1837 6.10004ZM23.117 13.2H21.567V14.8167C21.567 15.6834 20.867 16.3834 20.0003 16.3834C19.1337 16.3834 18.4337 15.6834 18.4337 14.8167V13.2H16.8837C16.017 13.2 15.317 12.5 15.317 11.6334C15.317 10.7667 16.017 10.0667 16.8837 10.0667H18.4337V8.58337C18.4337 7.71671 19.1337 7.01671 20.0003 7.01671C20.867 7.01671 21.567 7.71671 21.567 8.58337V10.0667H23.117C23.9837 10.0667 24.6837 10.7667 24.6837 11.6334C24.6837 12.5 23.9837 13.2 23.117 13.2Z" fill="#6001D3"/>
                                    </svg>

                                </div>
                                <h3><a href="#">Determine Your Ideal Timeline</a></h3>
                                <p>You must decide what to learn to become a full-stack developer and determine a timeline around it to develop your skills within a short period.</p>
                                <div class="mark-number"><svg width="138" height="212" viewBox="0 0 138 212" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.5" d="M120.693 178.81C125.448 178.81 129.411 180.395 132.581 183.565C135.751 186.735 137.336 190.697 137.336 195.452C137.336 200.009 135.751 203.823 132.581 206.894C129.411 209.965 125.448 211.5 120.693 211.5H19.6512C14.5001 211.5 10.4386 209.915 7.46674 206.745C4.49491 203.575 3.00899 199.514 3.00899 194.561C3.00899 189.608 4.79209 185.249 8.35829 181.485L73.1442 112.241C80.2766 104.514 86.0221 96.6387 90.3808 88.6148C94.7395 80.5909 96.9189 73.1117 96.9189 66.1775C96.9189 60.0357 95.4329 54.4883 92.4611 49.5352C89.4893 44.5822 85.6259 40.6197 80.871 37.6479C76.116 34.6761 70.9649 33.1902 65.4174 33.1902C59.6719 33.1902 53.8273 35.1219 47.8836 38.9852C41.94 42.8486 36.6898 47.9502 32.1329 54.2901C29.7555 57.4601 27.378 59.4413 25.0005 60.2338C22.6231 61.0263 20.4437 61.4226 18.4625 61.4226C14.1038 61.4226 10.0919 59.788 6.4266 56.519C2.76134 53.25 0.92871 49.4362 0.928711 45.0775C0.92871 41.7094 2.06791 38.4404 4.34632 35.2704C6.62472 32.1005 9.44796 28.8315 12.816 25.4634C20.3447 17.9348 29.062 11.892 38.9682 7.33521C48.8743 2.77841 58.3841 0.500015 67.4977 0.5C80.97 0.5 92.5602 3.2737 102.268 8.82112C111.976 14.3685 119.505 21.9962 124.854 31.7042C130.203 41.4122 132.878 52.408 132.878 64.6916C132.878 73.0127 131.343 81.4824 128.272 90.1007C125.201 98.719 120.991 107.09 115.641 115.213C110.292 123.336 104.15 131.162 97.216 138.69L57.0963 181.485L53.8273 178.81H120.693Z" fill="url(#paint0_linear_2080_4622)"/>
                                        <defs>
                                            <linearGradient id="paint0_linear_2080_4622" x1="-8.20722" y1="0.499994" x2="-8.20724" y2="239.764" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#ABAFC7"/>
                                                <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <div class="process style-3">
                                <div class="icon-user">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.9996 23.3334C11.6496 23.3334 4.84961 28.9334 4.84961 35.8334C4.84961 36.3 5.21628 36.6667 5.68294 36.6667H34.3163C34.7829 36.6667 35.1496 36.3 35.1496 35.8334C35.1496 28.9334 28.3496 23.3334 19.9996 23.3334Z" fill="#6001D3"/>
                                        <path d="M20.0003 3.33337C18.0337 3.33337 16.2337 4.01671 14.8003 5.16671C12.8837 6.68337 11.667 9.03338 11.667 11.6667C11.667 13.2334 12.1003 14.7 12.8837 15.95C14.317 18.3667 16.9503 20 20.0003 20C22.1003 20 24.017 19.2334 25.4837 17.9167C26.1337 17.3667 26.7003 16.7 27.1337 15.95C27.9003 14.7 28.3337 13.2334 28.3337 11.6667C28.3337 7.06671 24.6003 3.33337 20.0003 3.33337ZM24.317 10.7667L19.867 14.8667C19.567 15.15 19.1837 15.2834 18.8003 15.2834C18.4003 15.2834 18.0003 15.1334 17.7003 14.8334L15.6503 12.7667C15.0337 12.15 15.0337 11.1667 15.6503 10.55C16.267 9.93338 17.2503 9.93338 17.867 10.55L18.8503 11.5334L22.2003 8.45004C22.8337 7.86671 23.817 7.90004 24.4003 8.53337C24.9837 9.18337 24.9503 10.1834 24.317 10.7667Z" fill="#6001D3"/>
                                    </svg>
                                </div>
                                <h3><a href="#">Begin Building Your Portfolio</a> </h3>
                                <p>The first step toward landing a job as a full-stack developer is building a portfolio.</p>
                                <p> <u><a href="assets/resume.pdf">Download the Full Stack Developer Template here!</a></u> </p>
                                <div class="mark-number"><svg width="134" height="211" viewBox="0 0 134 211" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.5" d="M21.3451 166.125C23.1239 166.125 25.0509 166.423 27.1261 167.017C29.2013 167.611 31.5236 168.8 34.0929 170.583C37.4528 173.159 41.455 175.437 46.0996 177.418C50.7441 179.4 56.1298 180.39 62.2566 180.39C68.3835 180.39 74.1645 178.855 79.5996 175.784C85.0347 172.713 89.531 168.354 93.0885 162.708C96.646 157.061 98.4248 150.276 98.4248 142.351C98.4248 134.822 96.8931 128.581 93.8296 123.628C90.7662 118.675 86.7146 114.911 81.6748 112.335C76.6349 109.76 71.2493 108.472 65.5177 108.472C61.1696 108.472 57.5627 108.868 54.6969 109.661C51.8311 110.453 49.0642 111.295 46.396 112.187C43.7279 113.078 40.615 113.524 37.0575 113.524C32.5118 113.524 29.0037 111.939 26.5332 108.769C24.0627 105.599 22.8274 101.835 22.8274 97.4761C22.8274 94.7024 23.3709 92.2258 24.458 90.0465C25.545 87.8671 27.1755 85.4897 29.3496 82.9141L81.5266 25.8549L89.531 32.6901H16.6018C11.8584 32.6901 7.9056 31.1052 4.74336 27.9352C1.58112 24.7653 0 20.8028 0 16.0479C0 11.4911 1.58112 7.67725 4.74336 4.60634C7.9056 1.53545 11.8584 1.52588e-05 16.6018 0H107.319C113.445 0 118.041 1.68404 121.104 5.05212C124.167 8.42023 125.699 12.6799 125.699 17.831C125.699 20.4066 125.057 22.8831 123.772 25.2606C122.487 27.638 120.758 29.9165 118.584 32.0958L66.1106 90.0465L58.1062 79.9423C60.2802 78.9516 63.2943 78.0601 67.1482 77.2676C71.0022 76.4751 74.2139 76.0789 76.7832 76.0789C88.444 76.0789 98.573 79.1003 107.17 85.143C115.768 91.1857 122.389 99.0115 127.033 108.62C131.678 118.229 134 128.581 134 139.676C134 154.337 130.739 167.017 124.217 177.715C117.695 188.414 108.504 196.636 96.646 202.382C84.7876 208.127 70.9528 211 55.1416 211C47.8289 211 40.615 210.108 33.5 208.325C26.385 206.542 20.2581 204.165 15.1195 201.193C10.7714 198.816 7.85619 196.19 6.37389 193.318C4.89159 190.445 4.15044 187.721 4.15044 185.145C4.15044 180.588 5.78097 176.279 9.04204 172.218C12.3031 168.156 16.4041 166.125 21.3451 166.125Z" fill="url(#paint0_linear_2080_4614)"/>
                                        <defs>
                                            <linearGradient id="paint0_linear_2080_4614" x1="-20.6094" y1="0" x2="-20.6094" y2="275.904" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#ABAFC7"/>
                                                <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- flat development -->
    <section class="tf-section2 flat-development">
        <div class="themes-container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="heading-section center">
                        <h5>Launch Your Dev
                            Career</h5>
                        <h2>Developer Roadmaps</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="wrap-development">
                        <div class="icon">
                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M41.98 19.42C41.3 19.14 40.4 19 39.28 19H28.72C25.24 19 24 20.24 24 23.76V39.24C24 40.4 24.14 41.3 24.44 42C25.06 43.44 26.38 44 28.72 44H39.28C42.76 44 44 42.74 44 39.24V23.76C44 21.38 43.44 20.04 41.98 19.42ZM36 39.5H32C31.96 39.5 31.9 39.5 31.86 39.48C31.56 39.46 31.3 39.36 31.08 39.16C30.72 38.9 30.5 38.48 30.5 38C30.5 37.18 31.18 36.5 32 36.5H36C36.82 36.5 37.5 37.18 37.5 38C37.5 38.82 36.82 39.5 36 39.5Z" fill="#6001D3"/>
                                <path d="M41.9795 12.38V14C41.9795 15.1 41.0795 16 39.9795 16H28.7195C23.5995 16 20.9995 18.62 20.9995 23.76V42C20.9995 43.1 20.0995 44 18.9995 44H15.0995C14.2995 44 13.6595 43.36 13.6595 42.58C13.6595 41.78 14.2995 41.16 15.0995 41.16H18.9995V33.5H11.9995C7.55953 33.28 4.01953 29.62 4.01953 25.12V12.38C4.01953 7.76 7.77953 4 12.4195 4H33.5995C38.2195 4 41.9795 7.76 41.9795 12.38Z" fill="#6001D3"/>
                            </svg>
                        </div>
                        <div class="content">
                            <h3><a href="https://roadmap.sh/frontend">Frontend</a> </h3>
                            <p>Step by step guide to becoming a modern frontend developer in 2023                                </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="wrap-development" >
                        <div class="icon">
                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M32.48 4H15.52C10 4 8 6 8 11.62V36.38C8 42 10 44 15.52 44H32.46C38 44 40 42 40 36.38V11.62C40 6 38 4 32.48 4ZM24 38.6C22.08 38.6 20.5 37.02 20.5 35.1C20.5 33.18 22.08 31.6 24 31.6C25.92 31.6 27.5 33.18 27.5 35.1C27.5 37.02 25.92 38.6 24 38.6ZM28 12.5H20C19.18 12.5 18.5 11.82 18.5 11C18.5 10.18 19.18 9.5 20 9.5H28C28.82 9.5 29.5 10.18 29.5 11C29.5 11.82 28.82 12.5 28 12.5Z" fill="#6001D3"/>
                            </svg>
                        </div>
                        <div class="content">
                            <h3><a href="https://roadmap.sh/backend">Backend</a> </h3>
                            <p>Step by step guide to becoming a modern backend developer in 2023                                </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="wrap-development">
                        <div class="icon">
                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M34 45.5H14C13.18 45.5 12.5 44.82 12.5 44C12.5 43.18 13.18 42.5 14 42.5H34C34.82 42.5 35.5 43.18 35.5 44C35.5 44.82 34.82 45.5 34 45.5Z" fill="#6001D3"/>
                                <path d="M36 4H12C7.58 4 4 7.58 4 12V30C4 34.42 7.58 38 12 38H36C40.42 38 44 34.42 44 30V12C44 7.58 40.42 4 36 4ZM19.98 14.64C21.1 14.64 22 15.54 22 16.64C22 17.74 21.1 18.64 20 18.64C18.9 18.64 18 17.74 18 16.64C18 15.54 18.88 14.64 19.98 14.64ZM13.68 14.64C14.8 14.64 15.7 15.54 15.7 16.64C15.7 17.74 14.8 18.64 13.7 18.64C12.6 18.64 11.7 17.74 11.7 16.64C11.7 15.54 12.56 14.64 13.68 14.64ZM34.52 29.72H13.52C12.68 29.72 12 29.04 12 28.22C12 27.4 12.66 26.72 13.48 26.72H34.54C35.36 26.72 36.04 27.4 36.04 28.22C36.04 29.04 35.36 29.72 34.52 29.72ZM34.52 18.14H27.16C26.34 18.14 25.66 17.46 25.66 16.64C25.66 15.82 26.34 15.14 27.16 15.14H34.52C35.34 15.14 36.02 15.82 36.02 16.64C36.02 17.46 35.36 18.14 34.52 18.14Z" fill="#6001D3"/>
                            </svg>
                        </div>
                        <div class="content">
                            <h3><a href="https://roadmap.sh/react">React</a> </h3>
                            <p>Everything that is there to learn about React and the ecosystem in 2023.                                </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="wrap-development" >
                        <div class="icon">
                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M33.3 11.4399H14.7C8.8 11.4399 4 16.2399 4 22.1399V33.2999C4 39.1999 8.8 43.9999 14.7 43.9999H33.3C39.2 43.9999 44 39.1999 44 33.2999V22.1399C44 16.2399 39.2 11.4399 33.3 11.4399ZM29 24.0399C29 22.9399 29.9 22.0399 31 22.0399C32.1 22.0399 33 22.9399 33 24.0399C33 25.1399 32.1 26.0599 31 26.0599C29.9 26.0599 29 25.1799 29 24.0799V24.0399ZM20.26 32.1399C19.96 32.4399 19.58 32.5799 19.2 32.5799C18.82 32.5799 18.44 32.4399 18.14 32.1399L16.08 30.0799L14.1 32.0599C13.8 32.3599 13.42 32.4999 13.04 32.4999C12.66 32.4999 12.28 32.3599 11.98 32.0599C11.4 31.4799 11.4 30.5199 11.98 29.9399L13.96 27.9599L12.04 26.0399C11.46 25.4599 11.46 24.4999 12.04 23.9199C12.62 23.3399 13.58 23.3399 14.16 23.9199L16.08 25.8399L18.06 23.8599C18.64 23.2799 19.6 23.2799 20.18 23.8599C20.76 24.4399 20.76 25.3999 20.18 25.9799L18.2 27.9599L20.26 30.0199C20.84 30.5999 20.84 31.5599 20.26 32.1399ZM27.08 29.9999C25.98 29.9999 25.06 29.0999 25.06 27.9999C25.06 26.8999 25.94 25.9999 27.04 25.9999H27.08C28.18 25.9999 29.08 26.8999 29.08 27.9999C29.08 29.0999 28.2 29.9999 27.08 29.9999ZM31 33.9399C29.9 33.9399 29 33.0599 29 31.9599V31.9199C29 30.8199 29.9 29.9199 31 29.9199C32.1 29.9199 33 30.8199 33 31.9199C33 33.0199 32.12 33.9399 31 33.9399ZM34.96 29.9999C33.86 29.9999 32.94 29.0999 32.94 27.9999C32.94 26.8999 33.82 25.9999 34.92 25.9999H34.96C36.06 25.9999 36.96 26.8999 36.96 27.9999C36.96 29.0999 36.08 29.9999 34.96 29.9999Z" fill="#6001D3"/>
                                <path d="M27.2797 5.42L27.2597 7.3C27.2397 9.06 25.7797 10.52 23.9997 10.52C23.6997 10.52 23.5197 10.72 23.5197 10.98C23.5197 11.24 23.7197 11.44 23.9797 11.44H20.7597C20.7397 11.3 20.7197 11.14 20.7197 10.98C20.7197 9.18 22.1797 7.72 23.9597 7.72C24.2597 7.72 24.4597 7.52 24.4597 7.26L24.4797 5.38C24.4997 4.62 25.1197 4 25.8797 4H25.8997C26.6797 4 27.2797 4.64 27.2797 5.42Z" fill="#6001D3"/>
                            </svg>
                        </div>
                        <div class="content">
                            <h3><a href="https://roadmap.sh/javascript">JavaScript</a> </h3>
                            <p>Step by step guide to learn JavaScript in 2023                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

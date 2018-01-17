# geolabFirstProject

ვებგვერდი

iNSTALLATION:

	1)git clone https://github.com/geolabZura/geolabFirstProject.git
	
	2)გადავიდეთ შესაბამის დირექტორიაში სადაც ფაილი გადმოწერეთ(linux: cd /var/www/geolabFirstProject; windows: cd ../../xamp/htdocs/geolabFirstProject)
	
	3)composer install
	
	4)cp .env.example .env(კოპირება გავუკეთოთ .env.example ფაილს და გადავაკეთოთ .env ჩავწეროთ ბაზის სახელი რუთი და პაროლი )
	
	5)php artisan key:generate
	
	6)php artisan migrate
	
	7)php artisan db:seed
	
	8)php artisan serve
	
	9)მაილი ადმინის: root პაროლი: root@gmail.com
	

FRONT-END:

	1) Header: 2 დღე.
		მთავარი გვერდი მორგებულია ეკრანის ზომას.
		სლაიდერი უნდა იყო მორგებული ეკრანს, შესაძლებელი იყოს ფოტოების დათვალიერება, ასევე სლაიდერის ფოტოებს აქვთ სათაური და თარიღი.

	2) Services: 1 დღე.
		შეიძლება ერთი ან მეტი სერვისი იყოს გამოტანილი მთავარ გვერდზე.
		სერვისს ასევე აქვს თავისი სათაური,ლოგოთი.

	3) Contact: 2 დღე.
		გამოყენებული იქნება google-ის რუკა.
		ფორმა-ზე იქნება სახელის, მეილის, ტექსტის ჩასაწერი  და subject-ის ველები, ასევე სქესის არჩევისთვის გამოყენებული იქნება radio ღილაკები ხოლო სხვადასხვა სახის ინფორმაციის გამოსაწერად checkbox. რაიმე input ველის არ არჩევის შემთხვევაში error გამოვა შესაბამისი ველის ქვემოთ. თუ მომხმარებელმა ყველაფერი წარმატებით შეავსო მაშინ წარმატების მესიჯი გამოვა.

	4) Navigation: 1 დღე.
		ნავიგაციის დროს ლოგოს შეეცვლება ფერი, ღილაკი დინამიურად შეიცვლება, გამოჩნდება მენიუს ველები.

	5) Footer: 0,5სთ.
		copyright, შემქმნელის სახელი.

	6) Features:  1 დღე
		მთავარ გვერდზე parallax ეფექტის დამატება. და  სერვისის გვერძე  ანიმაციის დამატება

	*საიტი უნდა იყოს მორგებული საბოლოოდ როგორც კომპიუტერებისთვის ასევე მობილური ტელეფონებისთვის.

BACK-END:

	CMS Module:

		1) Header: 1,5 საათი.
			სლიადერის დამატების დროს უნდა დაემატოს ფოტო, სათაური და თარიგი. ასევე შესაძლებელია სლაიდერის წაშლა, ჩასწორება. შესაბამისად თუ რომელიმე ველი არ შეივსო ვალიდაციები. 

		2) Services: 1,5 საათი.
			სერვისების დამატების დროს უნდა დაემატოს svg ფორმატის ფოტო და სათაური. ასევე შესაძლებელია სერვისის წაშლა, ჩასწორება. შესაბამისად თუ რომელიმე ველი არ შეივსო ვალიდაციები.

		3) Social Links: 0,5 საათი.
			კონტაკტებში შესაძლებელი იქნება მხოლოდ სოციალური ქსელის დამატება ლინკითა და აიკონით და ჩასწორება.(წაშლა არ შეიძლება).

		4) Subscribers: 0,5 საათი.
			გამომწერების ინფორმაციის წაშლის, ჩასწორების ან დამატების შეასძლებლობა არ იქნება. მხოლოდ ხელმისაწვდომი იქნება მომხმარებლის სახელი, ელექტრონული ფოსტა, შევსების თარიღი.

	ფუნქციონალი:

		1) Login Page: 1 საათი.
			არსებული (ბაზაში წინასწარ შექმნილი) ელ.ფოსტით და პაროლით შესაძლებელია ავტორიზაციის გავლა. ვებგევრდის კონტეტნტის ადმინისტრირებისათვის.

		2) Contact Form: 2 საათი.
			საკონტაქტო ფორმის შევსების დროს მომხმარებელი თუ დათოვებს ცარიელს ან შეუვსებელს რომელიმე ველს დაუბრუნდეს შესაბამისი error მესიჯი.

	*მიგრაციები: 1 საათი.
	*blade-ში გადანაწილება ქონთენთის 3-4 საათი.
	



$ ->

	$("a.swap").click (evt) ->

		target = $(@).attr("data-swap")

		fadeOutCB = -> $("#" + target).fadeIn()
		spotsRemainCB = (data) -> $(".slots-left h2")[0].innerHTML = data


		$("section").fadeOut 400
		setTimeout fadeOutCB, 600

		$.get "functions.php", {p: target, verbose: true}, spotsRemainCB, 'html'
		evt.preventDefault()


	$("input[type=radio]").on 'click', ->

		target = $(@).attr("data-swap")

		fadeOutCB = -> $("select." + target).removeAttr('disabled').fadeIn()

		$("select.placement").attr("disabled", "disabled")
		$("select.placement").fadeOut 400
		setTimeout fadeOutCB, 600
		

	$("#zk5k-form").submit (evt) ->

		evt.preventDefault()
		$(@).find("p.alert, p.success").fadeOut().remove()

		formData = $("#zk5k-form").serialize()
		form = $(@)

		$.ajax 'handler.php',
			type: 'POST'
			data: formData

			success: (data) ->
				form.prepend("<p class='success'>" + data + "</p>")
				$("p.success").fadeIn 200
				form[0].reset()

			error: (jqXHR, textStatus, errorThrown) ->
				form.prepend("<p class='alert'>" + jqXHR.responseText + "</p>")


	# raceDate = new Date(2014, 11, 13, 21, 30, 0)
	# _second = 1000
	# _minute = _second * 60
	# _hour = _minute * 60
	# _day = _hour * 24

	raceTimer = ->

		now = new Date()
		distance = raceDate - now
		target = $(".time-left h2")[0]

		if (distance < 0)
			clearInterval timer
			target.innerHTML = ""
			return

		days = Math.floor(distance / _day)
		hours = Math.floor((distance % _day) / _hour)
		minutes = Math.floor((distance % _hour) / _minute)
		seconds = Math.floor((distance % _minute) / _second)

		timeString = "<div>Race Start</div> <div>" + days + '<span>d</span> ' + hours + '<span>h</span> ' + minutes + '<span>m</span> ' + seconds + '<span>s</span></div>'
		target.innerHTML = timeString

	raceTimer()
	timer = setInterval raceTimer, 1000







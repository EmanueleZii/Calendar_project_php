<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar Php</title>
    <meta name="description" content="calendario realizzato in php vanilla nessun framework">
    <link rel="stylesheet" href="style.css" />
</head>
<body>

   <header>
    <h1>
        Calendar <br> Php
    </h1>
   </header>

    <!--Clock-->
    <div class="clock-container">
        <div id="clock">
            
        </div>
    </div>

    <!--Calendar Section -->
    <div class="calendar">
        <div class="nav-btn-container">
            <button class="nav-btn" onclick="">
               ⬅️
            </button>
            <h2 id="monthYear" style="margin: 0;">

            </h2>
            <button class="nav-btn">
                ➡️
            </button>
        </div>

        <div class="calendar-grid" id="calendar">

        </div>
    </div>

    <!--Modal For Add / Edit / Delete Appointment-->
    <div class="eventSelectorWrapper">
        <label for="eventSelector">
            <strong>
                Seleziona Evento:
            </strong>
        </label>
        <select name="" id="eventSelector" onchange="">
            <option value="" disabled selected>Scegli L'evento</option>
        </select>
    </div>

    <!-- Main Form-->
    <form method="POST" action="" id="eventForm">
        <input type="hidden" name="action"  value="add" id="formAction">
        <input type="hidden" name="event_id" id="eventId">

        <label for="courseName">Titolo Del Corso</label>
        <input type="text" name="course_name" id="courseName" required>

        <label for="instructorName">Nome dell' Istruttore</label>
        <input type="text" name="instyructor_name" id="instructorName" required>

        <label for="startDate">Data Di Inizio:</label>
        <input type="date" name="start_date" id="start_date" required />

        <label for="endDate">Data Di Fine:</label>
        <input type="date" name="end_date" id="endDate" required>

        <button type="submit">💾 Salva</button>
        
    </form>

</body>
</html>

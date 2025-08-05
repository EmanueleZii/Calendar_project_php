<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="calendario realizzato in php vanilla nessun framework">
    <link rel="stylesheet" href="style.css">
    <title>Calendar Php</title> 
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
    <div class="modal" id="eventModal">
        <div class="modal-content">
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

            <!--Delete Form-->
            <form action="" method="POST" onsubmit="return confirm('Sei Sicuro di cancellare?')">
                <input type="hidden" name="action" value="delete">
                <input type="hidden" name="event_id" id="deleteEventId">
                <button type="submit" class="dubmit-btn">🗑️ Elimina </button>
            </form>

            <!--❌ Cancel -->
            <button type="button" onclick="" class="submit-btn">❌ Cancella </button>
        </div>
    </div>

    <script src="calendar.js">

    </script>

</body>
</html>

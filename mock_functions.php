<?php
// mock_functions.php

function executeQuery($db, $query)
{
    // Extract email and password from the query
    if (strpos($query, "'admin@gmail.com'") !== false && strpos($query, "'admin'") !== false) {
        // Simulate a successful query result (non-empty)
        return [true]; // Simplified, adjust as needed based on how you process query results
    }
    // Simulate a failed query result (empty)
    return false;
}

function setSessionVariable($key, $value)
{
    global $_SESSION;
    $_SESSION[$key] = $value;
}

// Ensure session_start() doesn't produce side effects in CLI environment
function sessionStart()
{
    if (!session_id())
        @session_start();
}
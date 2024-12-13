<?php
$xmlString = <<<XML
<?xml version="1.0" encoding="utf-8"?>
<collegedata>
    <department category="CSE">
        <subjects lang="en">Java</subjects>
        <name>Zamaradi</name>
        <age>23</age>
        <marks>90</marks>
        <address>240 Mwanza</address>
    </department>
    <department category="ETE">
        <subjects lang="en">Wave Propagation</subjects>
        <name>Seleman</name>
        <age>26</age>
        <marks>69</marks>
        <address>890 Tanga</address>
    </department>
    <department category="IST">
        <subjects lang="en">Introduction to IT</subjects>
        <name>Otimbi</name>
        <age>25</age>
        <marks>78</marks>
        <address>65 Arusha</address>
    </department>
</collegedata>
XML;

$xml = simplexml_load_string($xmlString);

if ($xml === false) {
    echo "Failed to load XML.";
    exit;
}

// Display the data in a structured format
echo "<h1>College Data</h1>";
foreach ($xml->department as $department) {
    echo "<h2>Department: " . $department['category'] . "</h2>";
    echo "<p><strong>Subjects:</strong> " . $department->subjects . "</p>";
    echo "<p><strong>Name:</strong> " . $department->name . "</p>";
    echo "<p><strong>Age:</strong> " . $department->age . "</p>";
    echo "<p><strong>Marks:</strong> " . $department->marks . "</p>";
    echo "<p><strong>Address:</strong> " . $department->address . "</p>";
    echo "<hr>";
}
?>
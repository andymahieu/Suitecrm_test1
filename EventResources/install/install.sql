-- Create the main table for EventResources
CREATE TABLE IF NOT EXISTS eventresources (
    id CHAR(36) NOT NULL,
    name VARCHAR(255) DEFAULT NULL,
    date_entered DATETIME DEFAULT NULL,
    date_modified DATETIME DEFAULT NULL,
    modified_user_id CHAR(36) DEFAULT NULL,
    created_by CHAR(36) DEFAULT NULL,
    description TEXT DEFAULT NULL,
    deleted TINYINT(1) DEFAULT 0,
    assigned_user_id CHAR(36) DEFAULT NULL,
    
    -- Custom fields from EventResource11
    uid VARCHAR(255) DEFAULT NULL,
    argb INT DEFAULT NULL,
    pattern INT DEFAULT NULL,
    daily_calendar_id INT DEFAULT NULL,
    event_creation_rule_id INT DEFAULT NULL,
    last_post_date DATETIME DEFAULT NULL,
    last_post_user_name VARCHAR(255) DEFAULT NULL,
    hourly_calendar_id INT DEFAULT NULL,
    external_data TEXT DEFAULT NULL,
    rub103 VARCHAR(80) DEFAULT NULL,
    rub75 VARCHAR(80) DEFAULT NULL,
    open_forum TINYINT(1) DEFAULT 0,
    
    -- Custom fields from EventResource12
    rub76 VARCHAR(80) DEFAULT NULL,
    rub81 VARCHAR(80) DEFAULT NULL,
    rub150 VARCHAR(80) DEFAULT NULL,
    
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Create relationship table for SecurityGroups
CREATE TABLE IF NOT EXISTS securitygroups_eventresources (
    id CHAR(36) NOT NULL,
    securitygroup_id CHAR(36) DEFAULT NULL,
    record_id CHAR(36) DEFAULT NULL,
    module VARCHAR(50) DEFAULT NULL,
    date_modified DATETIME DEFAULT NULL,
    deleted TINYINT(1) DEFAULT 0,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE VIEW coursesnames AS SELECT user_id, classes, GROUP_CONCAT(coursename SEPARATOR ', ') as coursename FROM tutorcourse GROUP BY user_id

CREATE VIEW tutoravgrating AS SELECT user_id, count(id) as totalrating, AVG(r_rating) as avgrating from tutor_reviews group by user_id
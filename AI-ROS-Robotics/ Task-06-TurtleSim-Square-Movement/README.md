# Task 6 - TurtleSim Square Movement

## Objective
Program the TurtleSim robot to move in a square path using ROS 2 and Python.

## Environment
- Operating System: Ubuntu 22.04 LTS
- ROS Distribution: Humble
- Programming Language: Python

---

## Steps

### 1. Source the ROS 2 environment

```bash
source /opt/ros/humble/setup.bash
```

### 2. Open the project folder

```bash
cd ~/turtle_square
```

### 3. Run the TurtleSim node

```bash
ros2 run turtlesim turtlesim_node
```

### 4. Execute the Python program

```bash
python3 turtle_square.py
```

---

## Result

The TurtleSim robot successfully moved in a square path by repeatedly moving forward and turning 90 degrees until the square was completed.

---

## Files

- `turtle_square.py` — Python program that controls the TurtleSim robot.

---

## Screenshot

### TurtleSim Square Result

![TurtleSim Square Result](screenshots/turtle_square_result.png)

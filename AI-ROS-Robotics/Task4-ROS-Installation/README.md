# Task 4 - Installing and Running ROS 2 Humble

## Objective
Install Ubuntu Linux and ROS 2 Humble.

## Environment
- Operating System: Ubuntu 22.04 LTS
- ROS Version: ROS 2 Humble
- Terminal: Bash


## Installation Steps

### 1. Update Ubuntu

```bash
sudo apt update
sudo apt upgrade -y
```

### 2. Install ROS 2 Humble

Follow the official ROS 2 Humble installation guide and install the Desktop version.

### 3. Configure the environment

```bash
echo "source /opt/ros/humble/setup.bash" >> ~/.bashrc
source ~/.bashrc
```

### 4. Verify the installation

Check the installed ROS version:

```bash
ros2 --version
```

Check the ROS distribution:

```bash
echo $ROS_DISTRO
```

Expected output:

```
humble
```

## Challenges Faced

### Problem 1
The `ros2` command was not recognized.

**Solution**

Run:

```bash
source /opt/ros/humble/setup.bash
```

and add it permanently:

```bash
echo "source /opt/ros/humble/setup.bash" >> ~/.bashrc
source ~/.bashrc
```

## Result

ROS 2 Humble was installed successfully.
The terminal correctly displayed:

```
humble
```

## Screenshots
### Update the system

![Update System](screenshots/update-system.png)

### Verify ROS Distribution

![ROS Distribution](screenshots/ros-distribution.png)


# Robot Dog Mechanical Design

## Overview
This project presents a simple mechanical design of a robot dog, The design aims to provide a stable and efficient foundation for future robot development.

## Table of Contents 
1. Robot Body and Chassis 
2. Leg Design 
3. Degrees of Freedom [DOF] 
4. Actuator Selection 
5. Torque Calculation 
6. Center of Gravity and Stability 
7. Proposed Walking Method 
8. Expected Mechanical Issues

## Robot Body and Chassis 
The robot has a rectangular PLA chassis with rounded corners that supports most of the main components, such as the battery and motors. Each of the four legs is attached to one corner of the chassis, for walking and balance. [Robot](<لقطة شاشة 2026-07-19 183114.png>)

## 2. Leg Design

Each leg consists of two main links: the femur and the tibia. A rubber pad is attached to the end of each leg to serve as the foot, providing the necessary friction during movement. The femur is connected to a dedicated MG996R servo motor, allowing independent movement of all four legs.
[RobotLeg](<لقطة شاشة 2026-07-19 183410.png>)



## 3. Degrees of Freedom (DOF)

Each leg has two joints, providing **2 DOF** per leg.

**Total DOF = 4 legs × 2 DOF = 8 DOF**


## 4. Actuator Selection

The robot uses **MG996R servo motors** to actuate the leg joints due to their high torque and suitability for lightweight quadruped robots.
[servo](<لقطة شاشة 2026-07-19 183423.png>)


## 5. Torque Calculation

Assuming the total mass of the robot is **1.15 kg**:

- **Total weight:**
  - F = m × g
  - F = 1.15 × 9.81 = **11.28 N**

- **Load acting on one leg:**
  - 11.28 ÷ 4 = **2.82 N**

- **Assuming the distance from the joint to the foot is 0.1 m:**
  - τ = F × r
  - τ = 2.82 × 0.1 = **0.282 N·m**


## 6. Center of Gravity and Stability

The center of gravity is located near the center of the chassis because the heaviest components, such as the battery and control board, are mounted inside the main body. This arrangement improves balance and stability during movement.


## 7. Proposed Walking Method

The proposed walking method is the **Trot Gait**, in which diagonal pairs of legs move together. This gait provides a good balance between speed and stability, making it suitable for a lightweight quadruped robot.


## 8. Expected Mechanical Issues

- Motor overload
- Joint backlash
- Slipping on smooth surfaces

from graphviz import Digraph

dot = Digraph(format='png')

dot.attr(splines='true', nodesep='0.5', ranksep='0.5')

dot.node('A', 'Proceso de Creación de la BD', shape='circle', style='filled', fillcolor='gold')

dot.node('B', 'Diseño de la BD', shape='box', style='filled', fillcolor='lightblue')
dot.node('C', 'Creación de Tablas', shape='box', style='filled', fillcolor='lightblue')
dot.node('D', 'Poblado de Datos', shape='box', style='filled', fillcolor='lightblue')
dot.node('E', 'Consultas y Análisis', shape='box', style='filled', fillcolor='lightblue')

dot.node('F', 'Civilizaciones', shape='ellipse', style='filled', fillcolor='lightgray')
dot.node('G', 'Unidades', shape='ellipse', style='filled', fillcolor='lightgray')
dot.node('H', 'Batallas', shape='ellipse', style='filled', fillcolor='lightgray')

dot.node('I', 'Insertar Civilizaciones', shape='parallelogram', style='filled', fillcolor='lightgreen')
dot.node('J', 'Insertar Unidades', shape='parallelogram', style='filled', fillcolor='lightgreen')
dot.node('K', 'Insertar Batallas', shape='parallelogram', style='filled', fillcolor='lightgreen')

dot.node('L', 'COUNT() para victorias', shape='diamond', style='filled', fillcolor='lightcoral')
dot.node('M', 'Subconsulta para filtrar', shape='diamond', style='filled', fillcolor='lightcoral')
dot.node('N', 'JOIN con COUNT()', shape='diamond', style='filled', fillcolor='lightcoral')

dot.node('O', 'Justificación de JOIN', shape='note', style='filled', fillcolor='lightyellow')

dot.edges(['AB', 'BC', 'CD', 'DE', 'BF', 'BG', 'BH', 'FI', 'GJ', 'HK', 'IL', 'JM', 'KN', 'NO'])

dot.render('esquema_mental_civilization', cleanup=False)
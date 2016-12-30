<?php

/* piece/index.html.twig */
class __TwigTemplate_ed0074d77fa857f25298b31c02146772fa12b5af8fc0f21194fb06a121fd2f67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "piece/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d0417eb0a84f0e9a60399791beea7332ac023d50f8e2899ef3e235929746d4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d0417eb0a84f0e9a60399791beea7332ac023d50f8e2899ef3e235929746d4a->enter($__internal_1d0417eb0a84f0e9a60399791beea7332ac023d50f8e2899ef3e235929746d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piece/index.html.twig"));

        $__internal_fbda2b8f66e3d767e6346ef412c3d0d57b712a68eebb72eb3434df39db64b9d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbda2b8f66e3d767e6346ef412c3d0d57b712a68eebb72eb3434df39db64b9d3->enter($__internal_fbda2b8f66e3d767e6346ef412c3d0d57b712a68eebb72eb3434df39db64b9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piece/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d0417eb0a84f0e9a60399791beea7332ac023d50f8e2899ef3e235929746d4a->leave($__internal_1d0417eb0a84f0e9a60399791beea7332ac023d50f8e2899ef3e235929746d4a_prof);

        
        $__internal_fbda2b8f66e3d767e6346ef412c3d0d57b712a68eebb72eb3434df39db64b9d3->leave($__internal_fbda2b8f66e3d767e6346ef412c3d0d57b712a68eebb72eb3434df39db64b9d3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c4732700d8fbf1cdd477059f80af5d9b0229163d8efa3c999482ba10280c273 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c4732700d8fbf1cdd477059f80af5d9b0229163d8efa3c999482ba10280c273->enter($__internal_4c4732700d8fbf1cdd477059f80af5d9b0229163d8efa3c999482ba10280c273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_94f6c28cdb12f6e6a04e882fcb7643746764a8cca2b9913e802eb0f4a0f68da8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94f6c28cdb12f6e6a04e882fcb7643746764a8cca2b9913e802eb0f4a0f68da8->enter($__internal_94f6c28cdb12f6e6a04e882fcb7643746764a8cca2b9913e802eb0f4a0f68da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Pieces list</h1>

    <table>
        <thead>
            <tr>
                <th>Refpiece</th>
                <th>Marquepiece</th>
                <th>Prixpiece</th>
                <th>Typepiece</th>
                <th>Libellepiece</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")));
        foreach ($context['_seq'] as $context["_key"] => $context["piece"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("piece_show", array("id" => $this->getAttribute($context["piece"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "refpiece", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "marquepiece", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "prixpiece", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "typepiece", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "libellepiece", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("piece_show", array("id" => $this->getAttribute($context["piece"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("piece_edit", array("id" => $this->getAttribute($context["piece"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['piece'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("piece_new");
        echo "\">Create a new piece</a>
        </li>
    </ul>
";
        
        $__internal_94f6c28cdb12f6e6a04e882fcb7643746764a8cca2b9913e802eb0f4a0f68da8->leave($__internal_94f6c28cdb12f6e6a04e882fcb7643746764a8cca2b9913e802eb0f4a0f68da8_prof);

        
        $__internal_4c4732700d8fbf1cdd477059f80af5d9b0229163d8efa3c999482ba10280c273->leave($__internal_4c4732700d8fbf1cdd477059f80af5d9b0229163d8efa3c999482ba10280c273_prof);

    }

    public function getTemplateName()
    {
        return "piece/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 44,  120 => 39,  108 => 33,  102 => 30,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Pieces list</h1>

    <table>
        <thead>
            <tr>
                <th>Refpiece</th>
                <th>Marquepiece</th>
                <th>Prixpiece</th>
                <th>Typepiece</th>
                <th>Libellepiece</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for piece in pieces %}
            <tr>
                <td><a href=\"{{ path('piece_show', { 'id': piece.id }) }}\">{{ piece.refpiece }}</a></td>
                <td>{{ piece.marquepiece }}</td>
                <td>{{ piece.prixpiece }}</td>
                <td>{{ piece.typepiece }}</td>
                <td>{{ piece.libellepiece }}</td>
                <td>{{ piece.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('piece_show', { 'id': piece.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('piece_edit', { 'id': piece.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('piece_new') }}\">Create a new piece</a>
        </li>
    </ul>
{% endblock %}
", "piece/index.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\Garage\\app\\Resources\\views\\piece\\index.html.twig");
    }
}

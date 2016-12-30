<?php

/* piece/index.html.twig */
class __TwigTemplate_6341ed9f495418c171d03d8c17c5f16719910e9ec3a5ac7c996aea3b747c9cec extends Twig_Template
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
        $__internal_8ed12e53c524e8191fa2c1512ae0b05be56748dc7a686d9647750c7b82e28530 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ed12e53c524e8191fa2c1512ae0b05be56748dc7a686d9647750c7b82e28530->enter($__internal_8ed12e53c524e8191fa2c1512ae0b05be56748dc7a686d9647750c7b82e28530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piece/index.html.twig"));

        $__internal_9d1115e46da690bc933adea0b39a9a52d107d5308538215dd08ec847310a87eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d1115e46da690bc933adea0b39a9a52d107d5308538215dd08ec847310a87eb->enter($__internal_9d1115e46da690bc933adea0b39a9a52d107d5308538215dd08ec847310a87eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piece/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ed12e53c524e8191fa2c1512ae0b05be56748dc7a686d9647750c7b82e28530->leave($__internal_8ed12e53c524e8191fa2c1512ae0b05be56748dc7a686d9647750c7b82e28530_prof);

        
        $__internal_9d1115e46da690bc933adea0b39a9a52d107d5308538215dd08ec847310a87eb->leave($__internal_9d1115e46da690bc933adea0b39a9a52d107d5308538215dd08ec847310a87eb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_df88237144dd0966a21f50b16b8a8dc34a60ecbfcb8e09f02c53b6b15d3001d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df88237144dd0966a21f50b16b8a8dc34a60ecbfcb8e09f02c53b6b15d3001d2->enter($__internal_df88237144dd0966a21f50b16b8a8dc34a60ecbfcb8e09f02c53b6b15d3001d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f28788521a63a6738c4eb431468ad0a88becef5ba9663ba9ecb48852c727308a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28788521a63a6738c4eb431468ad0a88becef5ba9663ba9ecb48852c727308a->enter($__internal_f28788521a63a6738c4eb431468ad0a88becef5ba9663ba9ecb48852c727308a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f28788521a63a6738c4eb431468ad0a88becef5ba9663ba9ecb48852c727308a->leave($__internal_f28788521a63a6738c4eb431468ad0a88becef5ba9663ba9ecb48852c727308a_prof);

        
        $__internal_df88237144dd0966a21f50b16b8a8dc34a60ecbfcb8e09f02c53b6b15d3001d2->leave($__internal_df88237144dd0966a21f50b16b8a8dc34a60ecbfcb8e09f02c53b6b15d3001d2_prof);

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
", "piece/index.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\app\\Resources\\views\\piece\\index.html.twig");
    }
}

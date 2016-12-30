<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_b3b627415599316a3ebecb4b2f55e465fb2201a466b179959a8cec5cbf69ca85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f85bc29b221b291bf24a3df2c0e95ff61ef58b8391d40dff82488f588015965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f85bc29b221b291bf24a3df2c0e95ff61ef58b8391d40dff82488f588015965->enter($__internal_2f85bc29b221b291bf24a3df2c0e95ff61ef58b8391d40dff82488f588015965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_23afd17dc95fb5dadbb729f9701fe2a701e47b78d00a492fc0f3b69e49e38e07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23afd17dc95fb5dadbb729f9701fe2a701e47b78d00a492fc0f3b69e49e38e07->enter($__internal_23afd17dc95fb5dadbb729f9701fe2a701e47b78d00a492fc0f3b69e49e38e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_2f85bc29b221b291bf24a3df2c0e95ff61ef58b8391d40dff82488f588015965->leave($__internal_2f85bc29b221b291bf24a3df2c0e95ff61ef58b8391d40dff82488f588015965_prof);

        
        $__internal_23afd17dc95fb5dadbb729f9701fe2a701e47b78d00a492fc0f3b69e49e38e07->leave($__internal_23afd17dc95fb5dadbb729f9701fe2a701e47b78d00a492fc0f3b69e49e38e07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}

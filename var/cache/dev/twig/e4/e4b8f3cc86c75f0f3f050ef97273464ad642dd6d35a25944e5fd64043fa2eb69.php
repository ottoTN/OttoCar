<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_6e2e98c499dca7c3099315bfb0374c26b847bb65b0374fb3add0b39592279f97 extends Twig_Template
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
        $__internal_392e8aa6b584ce857d3f7bdedc2d57a03a0a02f7b397043a62f4c9c69b28e581 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_392e8aa6b584ce857d3f7bdedc2d57a03a0a02f7b397043a62f4c9c69b28e581->enter($__internal_392e8aa6b584ce857d3f7bdedc2d57a03a0a02f7b397043a62f4c9c69b28e581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_90736cc7afaf95f9afdecde35ad6c626673aeb84ee87b64582d843f62029f23e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90736cc7afaf95f9afdecde35ad6c626673aeb84ee87b64582d843f62029f23e->enter($__internal_90736cc7afaf95f9afdecde35ad6c626673aeb84ee87b64582d843f62029f23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_392e8aa6b584ce857d3f7bdedc2d57a03a0a02f7b397043a62f4c9c69b28e581->leave($__internal_392e8aa6b584ce857d3f7bdedc2d57a03a0a02f7b397043a62f4c9c69b28e581_prof);

        
        $__internal_90736cc7afaf95f9afdecde35ad6c626673aeb84ee87b64582d843f62029f23e->leave($__internal_90736cc7afaf95f9afdecde35ad6c626673aeb84ee87b64582d843f62029f23e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
